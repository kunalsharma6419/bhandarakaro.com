<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\FoodProduct;
use Illuminate\Support\Facades\Validator;
use Auth;


class CartController extends Controller
{
    protected function cartAdd(Request $request)
    {
        $data=Validator::make($request->all(),[
            'prod_id'=>'required',
            'prod_qty'=>'required',
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        else
        {
            if (Auth::check()) {
                $prod_check = FoodProduct::where('id', $request->prod_id)->first();

                if ($prod_check) {
                    if (Cart::where('prod_id', $request->prod_id)->where('user_id', Auth::id())->exists()) {
                        return response()->json(['status' => $prod_check->name . " Already Added to cart"]);
                    }
                    else
                    {
                        $cartItem = new Cart();
                        $cartItem->prod_id = $request->prod_id;
                        $cartItem->user_id = Auth::id();
                        $cartItem->prod_qty =$request->prod_qty;
                        $cartItem->save();
                        return response()->json([
                            'message' => $prod_check->name . " Added to cart",
                            'status'=>200
                        ]);
                    }
                }
                else {
                    return response()->json([
                        'message' => "product not found",
                        'status'=>200
                    ]);
                }
            }
            else {
                return response()->json([
                    'message' => "Login to continue",
                    'status'=>200
                ]);
            }
        }
    }

    protected function cartRemove(Request $request)
    {
        $data=Validator::make($request->all(),[
            'id'=>'required',
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        else
        {
            $res=Cart::find($request->id);
            if($res)
            {
                $res->delete();
                return response()->json(
                    [
                        'message'=>"Cart Remove Successfully",
                        'status'=>200,
                    ]
                );
            }
            else{
                return response()->json([
                    'message'=>'not cart found',
                    'status'=>200,
                ]);
            }
        }
    }

    protected function cartUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'prod_qty' => 'required', // Add validation for quantity
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        } else {
            $cartItem = Cart::where('id',$request->id)->where('user_id',Auth::user()->id)->first();
            if ($cartItem) {
                $cartItem->update(['prod_qty' => $request->prod_qty]);
                return response()->json([
                    'message' => 'Cart Update Successfully',
                    'status' => 200,
                ]);
            } else {
                return response()->json([
                    'message' => 'Item not found in cart', // Updated error message
                    'status' => 404, // Changed status to 404 for not found
                ]);
            }
        }
    }

    protected function cartShowAll()
{
    $data = Cart::with('products')->where('user_id', Auth::user()->id)->get();
    if ($data->isNotEmpty()) {
        $foodProductsWithImageUrls = $data->map(function ($foodProduct) {
            $imageUrls = [];
            $product_qty=$foodProduct->products->price*$foodProduct->prod_qty;
            if (!empty($foodProduct->products->image)) {
                $images = json_decode($foodProduct->products->image, true);
                foreach ($images as $image) {
                    $imageUrls[] = env('APP_URL') . '/foodproductImage/' . $image;
                }
            }
            return [
                'food_image_urls' => $imageUrls,
                'data' => $foodProduct,
                'all_qty_price'=>$product_qty,
                'status' => 200,
            ];
        });

        $cartTotalPrice = $data->reduce(function ($carry, $item) {
            return $carry + ($item->products->price * $item->prod_qty);
        }, 0);

        return response([
            'data' => $foodProductsWithImageUrls,
            'total_price' => $cartTotalPrice,
            'status' => 200,
        ]);
    } else {
        return response()->json([
            'message' => "No cart!",
            'status' => 200
        ]);
    }
}

}
