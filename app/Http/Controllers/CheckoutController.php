<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodProduct;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\BookingItem;
use App\Models\BookingPayment;
use Softon\Indipay\Facades\Indipay;
use PDF;
use Mail;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $locations = Location::all();
        $categories = Category::all();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        $parameters = [];
        return view('user.pages.checkout', compact('cartitems', 'locations', 'categories', 'parameters'));
    }

    public function placeorder(Request $request)
    {
        $tid = mt_rand(100000, 999999); // Generates a random 6-digit number for tid
        $order_id = mt_rand(100000, 999999); // Generates a random 6-digit number for order_id

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
            // // Make sure the product and offer are available
            // if ($prod->products && $prod->products->offer) {
            //     // Calculate the discounted price
            //     $discountedPrice = $prod->products->price - ($prod->products->price * $prod->products->offer->offer_discount_percent) / 100;

            //     // Add the discounted price multiplied by quantity to the total
            //     $total += $discountedPrice * $prod->prod_qty;
            // }
            if ($prod->products) {
                $total += $prod->products->price * $prod->prod_qty;
            }
        }

        // Add 2% Platform fee to the total
        $platformFee = ($total * 2) / 100;
        // Calculate GST fee (18%)
        $gstFee = ($total * 18) / 100;

        // Add platform fee and GST fee to the total
        $total += $platformFee + $gstFee;

        $booking->total_price = $total;
        $booking->booking_date = $request->input('booking_date');
        $booking->booking_time = $request->input('booking_time');
        $booking->tracking_no = "BHANDARA".rand(1111,9999);
        $booking->save();


        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems as $item)
        {
            // Calculate discounted price
            // $discountedPrice = $item->products->price - ($item->products->price * $item->products->offer->offer_discount_percent) / 100;
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
            $user->name = $request->input('full_name');
            $user->email = $request->input('email');
            $user->address = $request->input('user_address');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        // Prepare parameters for the payment gateway
        $parameters = [
            'tid' => $tid,
            'order_id' => $order_id,
            'amount' => $total, // Use the total amount for the payment
            'firstname' => $booking->full_name,
            'email' => $booking->email,
            'phone' => $booking->phone,
            'productinfo' => 'Order for Bhandara At' . $booking->booking_temple_name,
            'billing_name' => $booking->full_name,
            'billing_address' => $booking->user_address,
            'billing_city' => $booking->city,
            'billing_state' => $booking->state,
            'billing_zip' => $booking->pincode,
            'billing_country' => $booking->country,
            'billing_tel' => $booking->phone,
            'billing_email' => $booking->email,
            'udf1' => '',
            'udf2' => '',
            'udf3' => '',
            'udf4' => '',
            'udf5' => '',
        ];

        // Prepare and send request to payment gateway
        $order = Indipay::gateway('CCAvenue')->prepare($parameters);
//         // dd($order);

        return Indipay::process($order);

    }

    public function response(Request $request)
    {
        $response = Indipay::response($request);
        $latestBookingItem = BookingItem::latest()->first();
        //dd($latestBookingItem);
        BookingPayment::create([
            'booking_id' => $latestBookingItem->booking_id,
            'order_id' => $response['order_id'],
            'tracking_id' => $response['tracking_id'],
            'bank_ref_no' => $response['bank_ref_no'],
            'order_status' => $response['order_status'],
            'failure_message' => $response['failure_message'],
            'payment_mode' => $response['payment_mode'],
            'card_name' => $response['card_name'],
            'status_code' => $response['status_code'],
            'status_message' => $response['status_message'],
            'currency' => $response['currency'],
            'amount' => $response['amount'],
            'billing_name' => $response['billing_name'],
            'billing_address' => $response['billing_address'],
            'billing_city' => $response['billing_city'],
            'billing_state' => $response['billing_state'],
            'billing_zip' => $response['billing_zip'],
            'billing_country' => $response['billing_country'],
            'billing_tel' => $response['billing_tel'],
            'billing_email' => $response['billing_email'],
            'delivery_name' => $response['delivery_name'],
            'delivery_address' => $response['delivery_address'],
            'delivery_city' => $response['delivery_city'],
            'delivery_state' => $response['delivery_state'],
            'delivery_zip' => $response['delivery_zip'],
            'delivery_country' => $response['delivery_country'],
            'delivery_tel' => $response['delivery_tel'],
            'merchant_param1' => $response['merchant_param1'],
            'merchant_param2' => $response['merchant_param2'],
            'merchant_param3' => $response['merchant_param3'],
            'merchant_param4' => $response['merchant_param4'],
            'merchant_param5' => $response['merchant_param5'],
            'vault' => $response['vault'],
            'offer_type' => $response['offer_type'],
            'offer_code' => $response['offer_code'],
            'discount_value' => $response['discount_value'],
            'mer_amount' => $response['mer_amount'],
            'eci_value' => $response['eci_value'],
            'retry' => $response['retry'],
            'response_code' => $response['response_code'],
            'billing_notes' => $response['billing_notes'],
            'trans_date' => $response['trans_date'],
            'bin_country' => $response['bin_country'],
        ]);

        // Check if payment was successful
        if ($response['order_status'] === 'Success') {
            // Send email
            $data["email"] = $response['billing_email'];
            $data["client_name"] = $response['billing_name'];
            $data["subject"] = "Thank You For Your Bhandara Booking. $latestBookingItem->booking_id";
            $BookingPayment=BookingPayment::latest()->first();
            $bookingItem=BookingItem::where('booking_id',$BookingPayment->booking_id)->get();
            $booking=Booking::latest()->first();
            //return view('testPDF',compact('bookingItem','response','booking'));
           // exit();
            $pdf = PDF::loadView('testPDF',compact('bookingItem','response','booking'));
            try {
                Mail::send('mail', compact('response','booking'), function ($message) use ($data, $pdf) {
                    $message->to($data["email"], $data["client_name"])
                        ->subject($data["subject"])
                        ->attachData($pdf->output(), "invoice.pdf");
                });
            } catch (JWTException $exception) {
                // Handle mail sending exception
                return redirect()->back()->withErrors('Error sending mail')->withInput();
            }
            // Your code for successful payment
            return view('user.pages.payment.success', compact('response'));
        } elseif ($response['order_status'] === 'Failure') {
            // Payment failed
            return view('user.pages.payment.failure', compact('response'));
        } elseif ($response['order_status'] === 'pending') {
            // Payment is pending
            return view('user.pages.payment.pending', compact('response'));
        } else {
            // Something else
            return view('user.pages.payment.error', compact('response'));
        }
    }


}
