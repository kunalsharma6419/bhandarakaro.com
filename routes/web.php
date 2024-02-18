<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\Imports\PincodeImportController;
use App\Http\Controllers\Admin\Imports\TempleImportController;
use App\Http\Controllers\Admin\FoodProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.pages.home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/menu/{foodproduct}', [HomeController::class, 'productdetail'])->name('foodproductdetail');
Route::get('/offers', [HomeController::class, 'offers']);
Route::get('/coming-soon', [HomeController::class, 'comingsoon']);
Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/my-order', [HomeController::class, 'myorder']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/search-temple', [HomeController::class, 'searchtemple']);
Route::get('/successful', [HomeController::class, 'successful']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/search-location', [HomeController::class, 'searchLocation'])->name('search.location');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
    // Route::post('/userlogout', [AuthController::class, 'destroy'])->name('userlogout');
    Route::get('/cart', [CartController::class, 'viewCart']);
    Route::get('/get-cart-count', [CartController::class,'getCartCount'])->name('get.cart.count');
    Route::get('/checkout', [CheckoutController::class, 'checkout']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::prefix('superadmin')->group(function () {
        //Locations CRUD
        Route::get('/locations', [LocationController::class, 'index'])->name('superadmin.locations.list');
        Route::get('/locations/create', [LocationController::class, 'create'])->name('superadmin.locations.create');
        Route::post('/locations/store', [LocationController::class, 'store'])->name('superadmin.locations.store');
        Route::get('/locations/edit/{id}', [LocationController::class, 'edit'])->name('superadmin.locations.edit');
        Route::put('/locations/update/{id}', [LocationController::class, 'update'])->name('superadmin.locations.update');
        Route::get('/locations/destroy/{id}', [LocationController::class, 'destroy'])->name('superadmin.locations.destroy');

        //Location Pincodes
        Route::get('/locations/pincodes', [PincodeImportController::class, 'index'])->name('superadmin.locations.pincodes.list');
        Route::get('/locations/pincodes/import', [PincodeImportController::class, 'showUploadForm'])->name('superadmin.locations.pincodes.import');
        Route::post('/locations/pincodes/importlog', [PincodeImportController::class, 'import'])->name('superadmin.locations.pincodes.importlog');

        //Temples Data
        Route::get('/locations/temples', [TempleImportController::class, 'index'])->name('superadmin.locations.temples.list');
        Route::get('/locations/temples/import', [TempleImportController::class, 'showUploadForm'])->name('superadmin.locations.temples.import');
        Route::post('/locations/temples/importlog', [TempleImportController::class, 'import'])->name('superadmin.locations.temples.importlog');

        //Categories CRUD
        Route::get('/categories', [CategoryController::class, 'index'])->name('superadmin.categories.list');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('superadmin.categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('superadmin.categories.store');
        Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('superadmin.categories.edit');
        Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('superadmin.categories.update');
        Route::get('/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('superadmin.categories.destroy');

        //Food Products CRUD
        Route::get('/foodproducts', [FoodProductController::class, 'index'])->name('superadmin.foodproducts.list');
        Route::get('/foodproducts/create', [FoodProductController::class, 'create'])->name('superadmin.foodproducts.create');
        Route::post('/foodproducts/store', [FoodProductController::class, 'store'])->name('superadmin.foodproducts.store');
        Route::get('/foodproducts/edit/{id}', [FoodProductController::class, 'edit'])->name('superadmin.foodproducts.edit');
        Route::put('/foodproducts/update/{id}', [FoodProductController::class, 'update'])->name('superadmin.foodproducts.update');
        Route::get('/foodproducts/destroy/{id}', [FoodProductController::class, 'destroy'])->name('superadmin.foodproducts.destroy');

        //Offers CRUD
        Route::get('/offers', [OfferController::class, 'index'])->name('superadmin.offers.list');
        Route::get('/offers/create', [OfferController::class, 'create'])->name('superadmin.offers.create');
        Route::post('/offers/store', [OfferController::class, 'store'])->name('superadmin.offers.store');
        Route::get('/offers/edit/{id}', [OfferController::class, 'edit'])->name('superadmin.offers.edit');
        Route::put('/offers/update/{id}', [OfferController::class, 'update'])->name('superadmin.offers.update');
        Route::get('/offers/destroy/{id}', [OfferController::class, 'destroy'])->name('superadmin.offers.destroy');
    });
});


Route::post('add-to-cart', [CartController::class, 'addProduct']);
Route::post('delete-cart-item', [CartController::class, 'deleteProduct']);
Route::post('update-cart', [CartController::class, 'updateCart']);
Route::post('/indipay/response/success', [CheckoutController::class, 'response'])->name('pay.response.success');
Route::post('/indipay/response/failure', [CheckoutController::class, 'response'])->name('pay.response.failure');

Route::prefix('user')->group(function () {
        //Mobile Signup Flow for User
        Route::get('/register', function () {
            return view('mobile.auth.register');
        })->name('user.register');

        Route::get('/register/verify', function () {
            return view('mobile.auth.verify');
        })->name('user.verify');

        // Route::get('/', function () {
        //     return view('user.pages.home');
        // })->name('user.home');
        Route::get('/', [HomeController::class, 'userhome'])->name('user.home');

        Route::post('/register/create', [AuthController::class, 'create'])->name('user.register.create');
        Route::post('/register/verify/otp', [AuthController::class, 'verify'])->name('user.verify.otp');
        //Mobile Login Flow for User
        Route::get('/login', [AuthController::class, 'showMobileNumberForm'])->name('user.login');
        Route::post('/login/sendotp', [AuthController::class, 'generate'])->name('user.login.sendotp');
        Route::get('/login/verifyotp/{user_phone}', [AuthController::class, 'verification'])->name('user.login.verifyotp');
        Route::post('/login/verifyotp', [AuthController::class, 'verifyOTP'])->name('user.login.verifyotp.submit');
        // Route::post('/login/verifyotp', [AuthController::class, 'verify'])->name('user.login.verifyotp.submit');
        // Route::get('/profile', function () {
        //     return view('user.pages.profile');
        // });
        Route::get('/profile', [AuthController::class, 'profile']);
        Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('user.update-profile');
    });

