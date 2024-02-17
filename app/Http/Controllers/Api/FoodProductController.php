<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodProduct;
use App\Models\Location;
use App\Models\Temple;
use App\Models\FoodItemLocationPrice;
use Session;
use App\Models\StarReview;
use App\Models\FlashDeal;
use App\Models\Flag;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class FoodProductController extends Controller
{

   public function foodProductAll()
{
    try {
        $foodProducts = DB::table('food_products')
            ->select('food_products.*', 'food_products.id as food_id', 'categories.*', 'categories.id as category_id')
            ->join('categories', 'categories.id', '=', 'food_products.category_id')
            ->get();

        if ($foodProducts->isNotEmpty()) {
            $foodProductsWithImageUrls = $foodProducts->map(function ($foodProduct) {
                $imageUrls = [];

                if ($foodProduct->image) {
                    $imageArray = json_decode($foodProduct->image, true);

                    // Check if there are any images
                    if (!empty($imageArray)) {
                        // Get the first image URL
                        $firstImageUrl = env('APP_URL') . '/foodproductImage/' . $imageArray[0];

                        // Assign the first image URL directly to 'food_image_url'
                        $imageUrls['food_image_url'] = $firstImageUrl;
                    }
                }

                $decodedTags = json_decode($foodProduct->tags, true);
                $decodedIngredient = json_decode($foodProduct->ingredient, true);

                // Remove \r, \n, and \ from the ingredient string
                $cleanedIngredient = str_replace(["\r", "\n", "\\"], '', $foodProduct->ingredient);

                return [
                    'food_image_url' => $imageUrls,
                    'data' => [
                        'id' => $foodProduct->food_id,
                        'name' => $foodProduct->name,
                        'price' => $foodProduct->price,
                        'image' => $foodProduct->image,
                        'description' => $foodProduct->description,
                        'category_id' => $foodProduct->category_id,
                        'ingredient' => $cleanedIngredient,
                        'tags' => $decodedTags,
                        'is_deal' => $foodProduct->is_deal,
                        'offer_id' => $foodProduct->offer_id,
                        'deleted_at' => $foodProduct->deleted_at,
                        'created_at' => $foodProduct->created_at,
                        'updated_at' => $foodProduct->updated_at,
                        'food_id' => $foodProduct->food_id,
                        'category_name' => $foodProduct->category_name,
                        'category_image' => $foodProduct->category_image,
                    ],
                ];
            });

            return response([
                'data' => $foodProductsWithImageUrls->values(), // Re-index the array
                'status' => 200,
            ]);
        } else {
            return response([
                'status' => 'No data found',
            ]);
        }
    } catch (\Exception $e) {
        return response([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}




 public function foodProductShow(Request $request)
{
    try {
        $data = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        } else {
            $foodProduct = FoodProduct::with('category')->findOrFail($request->id);

            $foodProductWithImageUrls = [

                'food_image_url' => $foodProduct->image
                    ? env('APP_URL') . '/foodproductImage/' . $foodProduct->image
                    : null,
                'data'=>$foodProduct,
                // Add other food product and category properties as needed
            ];

            return response([
                'data' => $foodProductWithImageUrls,
                'status' => 'success',
            ]);
        }
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response([
            'status' => 'error',
            'message' => 'Product not found',
        ], 404);
    } catch (\Exception $e) {
        return response([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}


 public function cartAdd(Request $request)
{
    $food = FoodProduct::find($request->id);
    $cart = json_decode(request()->cookie('cart'), true);
    if (!$cart) {
        $cart = [
            'stores' => [
                $food->id => [
                    'name' => $food->name,
                    'image' => $food->image,
                    'quantity' => $request->quantity,
                    'price' => $food->price,
                    'total_price' => $food->price * $request->quantity,
                ],
            ],
            'total_price' => $food->price * $request->quantity,
        ];
    } else {
        if (isset($cart['stores'][$food->id])) {
            $cart['stores'][$food->id]['quantity'] += $request->quantity;
            $cart['stores'][$food->id]['total_price'] += $food->price * $request->quantity;
            $cart['total_price']+=$food->price * $request->quantity;
        } else {
            $cart['stores'][$food->id] = [
            'name' => $food->name,
            'image' => $food->image,
            'quantity' => $request->quantity,
            'price' => $food->price,
            'total_price' => $food->price * $request->quantity,
        ];
        $cart['total_price'] += $food->price * $request->quantity;

        }

        // Update total_price for the cart
        $cart['total_price'] = 0;
        foreach ($cart['stores'] as $item) {

            $cart['total_price'] += $item['total_price'];
        }
    }

    return response([
        'data' => $cart,
        'success' => 200,
        'total_price' => $cart['total_price'],
    ])->cookie('cart', json_encode($cart));
}

public function cartRemove(Request $request)
{
    $cart = json_decode(request()->cookie('cart'), true);

    if ($cart && isset($cart['stores'][$request->id])) {
        $removedItem = $cart['stores'][$request->id];
        unset($cart['stores'][$request->id]);
        unset($cart['total_price']);
    }

    return response([
        'data' => $cart,
        'success' => 200,
    ])->cookie('cart', json_encode($cart));
}

public function cartShowAll()
{
     $cart = json_decode(request()->cookie('cart'), true);
        if ($cart && !empty($cart)) {
            return response([
                'data' => $cart,
                'status' => 200,
            ]);
        } else {
            return response([
                'message' => 'No cart found',
                'status' => 404,
            ]);
        }

}

public function starReview(Request $request)
{
    $data=Validator::make($request->all(),[
            'food_id'=>'required',
            'star_number'=>'required',
        ]);
    if ($data->fails()) {
        return response()->json(['errors' => $data->errors()], 422);
    }else{
        if($request->food_id){
           $reviewCheck = StarReview::where('food_id', $request->food_id)
                ->where('user_id', auth()->user()->id)
                ->first();
            if ($reviewCheck) {
                return response([
                    'status' => 200,
                    'message' => 'Already reviewed for this food product',
                ]);
            } else {
                StarReview::create([
                    'food_id' => $request->food_id,
                    'user_id' => auth()->user()->id,
                    'star_number' => $request->star_number,
                ]);

                return response([
                    'status' => 200,
                    'message' => 'Review submitted successfully',
                ]);
            }

        }

    }

}

public function flashDeal()
{
    $flashDeals = FlashDeal::join('food_products', 'flash_deals.food_id', '=', 'food_products.id')
        ->select(
            'flash_deals.*',
            'flash_deals.id as flash_id',
            'food_products.*',
            'food_products.id as food_id',
            \DB::raw('food_products.price - (food_products.price * flash_deals.discount / 100) as discounted_price')
        )
        ->get();
    if(count($flashDeals)>0){
        return response([
            'status'=>200,
            'data'=>$flashDeals,
        ]);
    }
    else {
            return response([
                'message' => 'No cart found',
                'status' => 404,
            ]);
        }
}

public function flag(Request $request)
{
    $validator = Validator::make($request->all(), [
        'food_id' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }else{
        $foodId = $request->food_id;
        $userId = auth()->user()->id;

        $flag = Flag::where('food_id', $foodId)
            ->where('user_id', $userId)
            ->first();

        if ($flag) {
            $flag->delete();
            return response([
                'status' => 200,
                'message' => 'Food unflagged successfully',
            ]);
        } else {
            // Flag does not exist, so create a new one
            Flag::create([
                'food_id' => $foodId,
                'user_id' => $userId,
            ]);

            return response([
                'status' => 200,
                'message' => 'Food flagged successfully',
            ]);
        }
    }

}


public function foodProductSearch(Request $request)
{
    $data = Validator::make($request->all(), [
        'name' => 'required',
    ]);

    if ($data->fails()) {
        return response()->json(['errors' => $data->errors()], 422);
    } else {
        $foodProducts = FoodProduct::with('category')
            ->where('name', 'LIKE', '%' . $request->name . '%')
            ->get();

        if ($foodProducts->isNotEmpty()) {
            $foodProductsWithImageUrls = $foodProducts->map(function ($foodProduct) {
                return [

                    'food_image_url' => $foodProduct->image
                        ? env('APP_URL') . '/foodproductImage/' . $foodProduct->image
                        : null,
                    'data'=>$foodProduct,
                ];
            });

            return response([
                'food_products' => $foodProductsWithImageUrls,
                'status' => 200,
            ]);
        } else {
            return response([
                'status' => 'Product not found!',
            ]);
        }
    }
}



public function mostpopularfood()
{
    $mostOrderedProduct = DB::table('orders')
        ->select('food_id', DB::raw('SUM(quantity) as totalOrders'))
        ->groupBy('food_id')
        ->where('status', 'completed')
        ->orderBy('totalOrders', 'desc')
        ->get();

    if ($mostOrderedProduct->isNotEmpty()) {
        $order = [];
        $totalOrders = [];

        foreach ($mostOrderedProduct as $most) {
            $product = FoodProduct::with('category')->find($most->food_id);

           // Check if $product->image is an array
            $food_image_url = is_array($product->image)
                ? env('APP_URL') . '/foodproductImage/' . $product->image[0] // Choose the first element or modify based on your logic
                : ($product->image
                    ? env('APP_URL') . '/foodproductImage/' . $product->image
                    : null);

            $category_image_url = $product->category->category_image
                ? env('APP_URL') . '/categoryImage/' . $product->category->category_image
                : null;

            $order[] = [
                'food_image_url' => $food_image_url,
                'category_image_url' => $category_image_url,
                'data'=>$product
            ];

            $totalOrders[] = "Food Name: " . $product->food_name . " => Quantity: " . $most->totalOrders;
        }

        return response([
            'food_products' => $order,
            'total_order' => $totalOrders,
            'status' => 200,
        ]);
    } else {
        return response([
            'message' => 'No most popular food found',
            'success' => false,
        ]);
    }
}

   public function mostWeekPopularFood()
{
    try {
        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();

        $mostOrderedProduct = DB::table('orders')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('food_id', DB::raw('SUM(quantity) as totalOrders'))
            ->groupBy('food_id')
            ->where('status', 'completed')
            ->orderByDesc('totalOrders')
            ->get();

        if ($mostOrderedProduct->isNotEmpty()) {
            $orders = [];
            $totalOrders = [];

            foreach ($mostOrderedProduct as $most) {
                $product = FoodProduct::with('category')->find($most->food_id);

                // Check if $product->image is an array
                $food_image_url = is_array($product->image)
                    ? env('APP_URL') . '/foodproductImage/' . $product->image[0] // Choose the first element or modify based on your logic
                    : ($product->image
                        ? env('APP_URL') . '/foodproductImage/' . $product->image
                        : null);

                $category_image_url = $product->category->category_image
                    ? env('APP_URL') . '/categoryImage/' . $product->category->category_image
                    : null;

                $orders[] = [
                    'food_image_url' => $food_image_url,
                    'category_image_url' => $category_image_url,
                    'data' => $product,
                ];

                $totalOrders[] = "Food Name: " . $product->food_name . " => Quantity: " . $most->totalOrders;
            }

            return response([
                'food_products' => $orders,
                'total_order' => $totalOrders,
                'status' => 200,
            ]);
        } else {
            return response([
                'message' => 'Not found trending data',
                'success' => false,
            ]);
        }
    } catch (\Exception $e) {
        return response([
            'message' => $e->getMessage(),
            'success' => false,
        ]);
    }
}

    public function foodItemLocationPrice(Request $request)
    {
        $data=Validator::make($request->all(),[
            'l_pincode'=>'required',
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }else{
           $location= Location::where('l_pincode',$request->l_pincode)->first();
           if($location){
                $foodlocain=FoodItemLocationPrice::where('pincode',$location->id)->get();
               $foodItems=[];
               $total_price=[];
               foreach($foodlocain as $foodItem){
                    $foodpric=FoodProduct::where('id',$foodItem->food_item_id)->first();
                    $foodItems[]=$foodpric;
                    $foodItems[]['Food Item Location Price']=$foodpric->price+$foodItem->location_price;
                }
               return response([
                    'status'=>200,
                    'food_Item_price_location'=>$foodlocain,
                    'food_product'=>$foodItems,
                    'location'=>$location
                ]);
               }else{
                    return response([
                        'status'=>200,
                        'message'=>'Location not found data!',
                    ]);
                }
           }

    }



}

