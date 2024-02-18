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

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.pages.dashboard');
        } elseif($usertype=='2') {
            return view('vendor.dashboard');
        } else {
            $locations = Location::take(10)->get();
            $categories = Category::all();
            $offers = Offer::latest()->get();
            $foodproducts = FoodProduct::with('category', 'offer')
                ->whereRaw('MOD(id, 2) = 1')
                ->take(8)
                ->get();
            $flashdeals = FlashDeal::with('foodProduct', 'foodProduct.offer')
                ->take(4)
                ->get();
            $trendingfoods = FoodProduct::with('category', 'offer')
                ->whereRaw('MOD(id, 2) = 0')
                ->take(6)
                ->get();
            $templeWithMaxReviews = TemplesData::orderBy('no_of_reviews', 'desc')
                ->whereRaw('MOD(id, 2) = 0')
                ->take(8)
                ->get();
            return view('user.pages.home', compact('locations', 'categories', 'offers','foodproducts', 'flashdeals', 'trendingfoods', 'templeWithMaxReviews'));
        }
    }

    public function index()
    {
        $locations = Location::take(10)->get();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $foodproducts = FoodProduct::with('category', 'offer')
            ->whereRaw('MOD(id, 2) = 1')
            ->take(8)
            ->get();
        $flashdeals = FlashDeal::with('foodProduct', 'foodProduct.offer')
            ->take(4)
            ->get();
        $trendingfoods = FoodProduct::with('category', 'offer')
            ->whereRaw('MOD(id, 2) = 0')
            ->take(6)
            ->get();
        $templeWithMaxReviews = TemplesData::orderBy('no_of_reviews', 'desc')
        ->whereRaw('MOD(id, 2) = 0')
                ->take(8)
                ->get();
        return view('user.pages.home', compact('locations', 'categories', 'offers', 'foodproducts', 'flashdeals', 'trendingfoods', 'templeWithMaxReviews'));
    }

    public function menu()
    {
        $locations = Location::all();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $search = request('search');
        $foodproducts = FoodProduct::with('category', 'offer');

        if ($search) {
            $foodproducts->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('ingredient', 'LIKE', '%' . $search . '%');
            });
        }

        $foodproducts = $foodproducts->get();
        $trendingfoods = FoodProduct::with('category', 'offer')
            ->whereRaw('MOD(id, 2) = 0')
            ->take(6)
            ->get();
        return view('user.pages.menu', compact('locations','categories', 'offers','foodproducts', 'trendingfoods','search'));
    }

    public function productdetail($id)
    {
        $locations = Location::take(10)->get();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $foodproduct = FoodProduct::findOrFail($id);

        // Fetch related items based on the category of the current product
        $relatedItems = FoodProduct::where('category_id', $foodproduct->category_id)
            ->where('id', '!=', $foodproduct->id)
            ->take(4) // You can adjust the number of related items to display
            ->get();

        return view('user.pages.productdetail', compact('locations','categories','offers','foodproduct', 'relatedItems'));
    }

    public function offers()
    {
        $locations = Location::all();
        return view('user.pages.offers', compact('locations'));
    }

    public function cart()
    {
        $locations = Location::all();
        return view('user.pages.cart', compact('locations'));
    }

    public function checkout()
    {
        $locations = Location::all();
        return view('user.pages.checkout', compact('locations'));
    }

    public function comingsoon()
    {
        $locations = Location::all();
        return view('user.pages.comingsoon', compact('locations'));
    }

    public function contactus()
    {
        $locations = Location::all();
        return view('user.pages.contactus', compact('locations'));
    }

    public function faq()
    {
        $locations = Location::all();
        return view('user.pages.faq', compact('locations'));
    }

    public function myorder()
    {
        $locations = Location::all();
        return view('user.pages.myorder', compact('locations'));
    }

    public function privacy()
    {
        $locations = Location::all();
        return view('user.pages.privacy', compact('locations'));
    }

    public function search()
    {
        $locations = Location::all();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $search = request('search');
        $foodproducts = FoodProduct::with('category', 'offer');

        if ($search) {
            $foodproducts->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('ingredient', 'LIKE', '%' . $search . '%');
            });
        }

        $foodproducts = $foodproducts->get();
        return view('user.pages.search', compact('locations','categories','offers','foodproducts', 'search'));
    }

    public function searchtemple()
    {
        $locations = Location::all();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $search = request('search');
        $temples = TemplesData::orderBy('no_of_reviews', 'desc');

        if ($search) {
            $temples->where(function ($query) use ($search) {
                $query->where('temple_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('full_address_code', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%');
            });
        }

        $temples = $temples->get();
        return view('user.pages.searchtemple', compact('locations','categories','offers','temples', 'search'));
    }

    public function searchLocation(Request $request)
    {
        $query = $request->get('query');

        $locations = LocationPincode::where('circle_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('region_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('division_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('office_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('pincode', 'LIKE', '%' . $query . '%')
                    ->orWhere('district', 'LIKE', '%' . $query . '%')
                    ->orWhere('state_name', 'LIKE', '%' . $query . '%')
                    ->distinct('pincode')
                    ->get();

        return response()->json($locations);
    }

    public function successful()
    {
        $locations = Location::all();
        return view('user.pages.successful', compact('locations'));
    }

    public function terms()
    {
        $locations = Location::all();
        return view('user.pages.terms', compact('locations'));
    }

    public function userhome()
    {
        $locations = Location::take(7)->get();
        $categories = Category::all();
        $offers = Offer::latest()->get();
        $foodproducts = FoodProduct::with('category', 'offer')
            ->whereRaw('MOD(id, 2) = 1')
            ->take(8)
            ->get();
        $flashdeals = FlashDeal::with('foodProduct', 'foodProduct.offer')
            ->take(4)
            ->get();
        $trendingfoods = FoodProduct::with('category', 'offer')
            ->whereRaw('MOD(id, 2) = 0')
            ->take(6)
            ->get();
        $templeWithMaxReviews = TemplesData::orderBy('no_of_reviews', 'desc')
        ->whereRaw('MOD(id, 2) = 0')
                ->take(8)
                ->get();
        return view('user.pages.home', compact('locations', 'categories', 'offers', 'foodproducts', 'flashdeals', 'trendingfoods', 'templeWithMaxReviews'));
    }
}
