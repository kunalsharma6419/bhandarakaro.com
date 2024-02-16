<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodProduct;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        // dd($request->all());
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $prod_check = FoodProduct::where('id', $product_id)->first();

            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->name . " Already Added to cart"]);
                } else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name . " Added to cart"]);
                }
            }
        } else {
            // Ensure a consistent structure for the response when the user is not logged in
            return response()->json(['status' => "Login to continue"]);
        }
    }

    public function viewCart()
    {
        $locations = Location::all();
        $categories = Category::all();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('user.pages.cart', compact('cartitems', 'locations', 'categories'));
    }

    public function updateCart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');
        $minus=$request->minus;
        $plus=$request->plus;
        if(Auth::check())
        {
           if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
           {
              $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
              if($minus=="yes"){
                    //   dd($cart->prod_qty);
                    $cart->prod_qty =  $cart->prod_qty-1;
                    $cart->update();
                    return response()->json(['status'=> "Quantity updated"]);
              }else{
                    $cart->prod_qty = $cart->prod_qty+1;
                    $cart->update();
                    return response()->json(['status'=> "Quantity updated"]);
              }

           }
        } else {
            // Ensure a consistent structure for the response when the user is not logged in
            return response()->json(['status' => "Login to continue"]);
        }
    }

    public function deleteProduct(Request $request)
    {
        if(Auth::check())
        {
           $prod_id = $request->input('prod_id');
           if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
           {
              $cartitem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
              $cartitem->delete();
              return response()->json(['status' => "Product Removed Successfully"]);
           }
        }
        else
        {
            return response()->json(['status' => "Login to Continue" ]);
        }
    }

}
