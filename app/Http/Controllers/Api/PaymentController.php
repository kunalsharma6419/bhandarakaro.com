<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Cart;
use App\Models\User;
use App\Models\Booking;
use App\Models\BookingItem;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Softon\Indipay\Facades\Indipay;


class PaymentController extends Controller
{

    public function booking(Request $request)
    {
        $data=Validator::make($request->all(),[
            'full_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'user_address'=>'required',
            'booking_temple_name'=>'required',
            'booking_temple_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'pincode'=>'required',
            'booking_time'=>'required',
            'booking_date'=>'required',
         ]);
         if ($data->fails()) {
             return response()->json(['errors' => $data->errors()], 422);
         }
         else
         {
            $booking = new Booking();
            $booking->user_id = Auth::id();
            $booking->full_name = $request->input('full_name');
            $booking->email = $request->input('email');
            $booking->phone = $request->input('phone');
            $booking->user_address = $request->input('user_address');
            $booking->booking_temple_name = $request->input('booking_temple_name');
            $booking->booking_temple_address = $request->input('booking_temple_address');
            $booking->city = $request->input('city');
            $booking->state = $request->input('state');
            $booking->country = $request->input('country');
            $booking->pincode = $request->input('pincode');
            //To Calculate Total
            $total = 0;
            $cartitems_total = Cart::where('user_id', Auth::id())->get();
            foreach ($cartitems_total as $prod)
            {
                if ($prod->products) {
                    // $discountedPrice = $prod->products->price - ($prod->products->price * $prod->products->offer->offer_discount_percent) / 100;
                    // $total += $discountedPrice * $prod->prod_qty;
                    $total += $prod->products->price * $prod->prod_qty;
                }
            }
            $booking->total_price = $total;
            $booking->booking_date = $request->input('booking_date');
            $booking->booking_time = $request->input('booking_time');
            $booking->tracking_no = "BHANDARA".rand(1111,9999);
            $booking->save();
            $cartitems = Cart::where('user_id', Auth::id())->get();
            foreach ($cartitems as $item)
            {
                // $discountedPrice = $item->products->price - ($item->products->price * $item->products->offer->offer_discount_percent) / 100;
                BookingItem::create([
                    'booking_id' => $booking->id,
                    'prod_id' => $item->prod_id,
                    'qty' => $item->prod_qty,
                    'price' => $item->products->price*$item->prod_qty,
                ]);
            }
            if(Auth::user()->address == NULL)
            {
                $user = User::where('id', Auth::id())->first();
                $user->name = $request->input('full_name');
                $user->email = $request->input('email');
                $user->address = $request->input('user_address');
                $user->update();
            }
            $cartitems = Cart::where('user_id', Auth::id())->get();
            Cart::destroy($cartitems);

            $booking_Data=Booking::find($booking->id);
            return response()->json([
                'bookingData'=>$booking_Data,
                'status'=>200,
                'total_price'=> $total,
                'message'=>'Proceed to payment...'
            ]);

        }
    }




    // public function response(Request $request)
    // {
    //     $response = Indipay::response($request);
    //     //dd($response);
    //     // dump($response);

    //     if ($response['order_status'] === 'Success') {
    //         // Payment was successful
    //         return $response;
    //     } elseif ($response['order_status'] === 'Failure') {
    //         // Payment failed
    //         return $response;
    //     } elseif ($response['order_status'] === 'pending') {
    //         // Payment is pending
    //         return $response;
    //     } else {
    //         // Something else
    //         return $response;
    //     }

    // }


}
