<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Location;
use App\Models\Category;
use App\Models\Offer;
use App\Models\FoodProduct;
use App\Models\FlashDeal;
use App\Models\TemplesData;
use App\Models\LocationPincode;
use App\Models\Booking;

class UserController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $categories = Category::all();
        $bookings = Booking::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('user.pages.bookings.index', compact('locations','categories', 'bookings'));
    }

    public function view($trackingno)
    {
        $locations = Location::all();
        $categories = Category::all();
        $bookings = Booking::where('tracking_no', $trackingno)->where('user_id', Auth::id())->first();
        return view('user.pages.bookings.view', compact('locations','categories', 'bookings'));
    }
}
