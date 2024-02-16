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


class PaymentController extends Controller
{

    public function booking(Request $request)
    {
        $data=Validator::make($request->all(),[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'user_address'=>'required',
            'booking_temple_name'=>'required',
            'booking_temple_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'pincode'=>'required',
         ]);
         if ($data->fails()) {
             return response()->json(['errors' => $data->errors()], 422);
         }
         else
         {
            $booking = new Booking();
            $booking->user_id = Auth::id();
            $booking->full_name = $request->input('fname')." ".$request->input('lname');
            $booking->email = $request->input('email');
            $booking->phone = $request->input('phone');
            $booking->user_address = $request->input('user_address');
            $booking->booking_temple_name = $request->input('booking_temple_name');
            $booking->booking_temple_address = $request->input('booking_temple_address');
            $booking->message = $request->input('message');
            $booking->booking_date = \Carbon\Carbon::now();
            $booking->city = $request->input('city');
            $booking->state = $request->input('state');
            $booking->country = $request->input('country');
            $booking->pincode = $request->input('pincode');
            $booking->tracking_no = "BHNDR".rand(1111,9999);
           // $booking->save();
            //$booking->id;

            $cartitems = Cart::where('user_id', Auth::user()->id)->get();
            if(count($cartitems)>0){
                foreach ($cartitems as $item)
                {
                    BookingItem::create([
                        'booking_id' => $booking->id,
                        'prod_id' => $item->prod_id,
                        'qty' => $item->prod_qty,
                        'price' => $item->products->price,
                    ]);

                }
                if(Auth::user()->address == NULL)
                {
                    $user = User::where('id', Auth::id())->first();
                    $user->address = $request->input('user_address');
                    $user->update();
                }

                $cartitems = Cart::where('user_id', Auth::id())->get();
                Cart::destroy($cartitems);
                return response()->json([
                    'status' => 200,
                    'message'=>'Booking Successful! Your tracking number is: '. $booking->tracking_no ,
                ]);
            }
            else{
                return response()->json([
                    'status'=>200,
                    'message'=>'Cart item not  found!'
                 ]);
            }


        }
    }




    protected function checkout(Request $request)
    {
        $data=Validator::make($request->all(),[
           'billing_name'=>'required',
           'billing_address'=>'required',
           'billing_city'=>'required',
           'billing_state'=>'required',
           'billing_zip'=>'required',
           'billing_country'=>'required',
           'billing_tel'=>'required',
           'billing_email'=>'required',
           'delivery_name'=>'required',
           'delivery_address'=>'required',
           'delivery_city'=>'required',
           'delivery_state'=>'required',
           'delivery_zip'=>'required',
           'delivery_country'=>'required',
           'delivery_tel'=>'required',
           'merchant_param1'=>'required',
           'merchant_param2'=>'required',
           'merchant_param3'=>'required',
           'merchant_param4'=>'required',
           'merchant_param5'=>'required',
        //    'promo_code'=>'required',
        //    'customer_identifier'=>'required',
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        else
        {
            $cartData = Cart::with('products')->where('user_id', Auth::user()->id)->get();
            if ($cartData->isEmpty()) {
                return response()->json([
                    'message' => "No cart!",
                    'status' => 200
                ]);
            }

            $cartTotal = 0;

            $formattedData = $cartData->map(function ($cartItem) use (&$cartTotal) {
                $totalPrice = $cartItem->products->price * $cartItem->prod_qty;
                $cartTotal += $totalPrice;

                return [
                    'cart_item' => $cartItem,
                    'product' => [
                        'food_item'=>$cartItem->products,
                        'total_price' => $totalPrice,
                    ]
                ];
            });

            $data=[
                'tid'=>now(),
                'merchant_id'=>env('MERCHANT_ID'),
                'order_id'=>rand(000000000000,99999999999),
                'amount'=>$cartTotal.".00",
                'currency'=>"INR",
                'redirect_url'=>env('APP_URL') ."/public/NON_SEAMLESS_KIT/ccavResponseHandler.php",
                'cancel_url'=>env('APP_URL') ."/public/NON_SEAMLESS_KIT/ccavResponseHandler.php",
                'language'=>"EN",
                'billing_name'=>$request->billing_name,
                'billing_address'=>$request->billing_address,
                'billing_city'=>$request->billing_city,
                'billing_state'=>$request->billing_state,
                'billing_zip'=>$request->billing_zip,
                'billing_country'=>$request->billing_country,
                'billing_tel'=>$request->billing_tel,
                'billing_email'=>$request->billing_email,
                'delivery_name'=>$request->delivery_name,
                'delivery_address'=>$request->delivery_address,
                'delivery_city'=>$request->delivery_city,
                'delivery_state'=>$request->delivery_state,
                'delivery_zip'=>$request->delivery_zip,
                'delivery_country'=>$request->delivery_country,
                'delivery_tel'=>$request->delivery_tel,
                'merchant_param1'=>$request->merchant_param1,
                'merchant_param2'=>$request->merchant_param2,
                'merchant_param3'=>$request->merchant_param3,
                'merchant_param4'=>$request->merchant_param4,
                'merchant_param5'=>$request->merchant_param5,
            ];
            return response()->json([
                'data'=>$data,
                'status'=>200,
            ])->cookie('transaction_data', json_encode($data));

        }

    }


    protected function payment_request(Request $request)
    {
        $data = json_decode(request()->cookie('transaction_data'), true);
        if ($data) {
            $merchant_data = env('MERCHANT_ID');
            $working_key = env('CCAVENUE_WORKING_KEY');
            $access_code = env('CCAVENUE_ACCESS_CODE');

            foreach ($data as $key => $value){
                $merchant_data .= $key.'='.$value.'&';
            }
            $encrypted_data = encrypt($merchant_data, $working_key);
            return response()->json([
                'action'=>"https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction",
                'encRequest'=>$encrypted_data,
                'access_code'=>$access_code,
                'status'=>200,
            ]);
        } else {
            return response()->json([
                'message' => 'Transaction data not found in cookie',
                'status' => 200,
            ]);
        }
    }

    // protected function payment_redirect(Request $request)
    // {
    //     $encRequest=$request->encRequest;
    //     $access_code=env('CCAVENUE_ACCESS_CODE');
    //     return
    // }
}
