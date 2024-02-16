<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FoodProductController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\CartController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/user', [AuthController::class,'userGet'])->name('userget');
        Route::post('/logout', [AuthController::class,'logout'])->name('logout');
        Route::post('/food_product_show',[FoodProductController::class,'foodProductShow'])->name('foodproductshow');
        Route::post('/food_product',[FoodProductController::class,'foodProductAll'])->name('foodproductall');
        Route::post('/food_product_show',[FoodProductController::class,'foodProductShow'])->name('foodproductshow');
        Route::post('/cart',[CartController::class,'cartAdd'])->name('cartAdd');
        Route::post('/cart_remove',[CartController::class,'cartRemove'])->name('cartRemove');
        Route::post('/cart_show',[CartController::class,'cartShowAll'])->name('cartShowAll');
        Route::post('/cart_update',[CartController::class,'cartUpdate'])->name('cartUpdate');
        Route::post('/star_review',[FoodProductController::class,'starReview'])->name('starReview');
        Route::post('/flag',[FoodProductController::class,'flag'])->name('flag');
        Route::post('/flash_deal',[FoodProductController::class,'flashDeal'])->name('flashDeal');
        Route::post('/food_product_search',[FoodProductController::class,'foodProductSearch'])->name('foodProductSearch');
        Route::post('/my_profile_update',[UserController::class,'myProfileUpdat'])->name('myProfileUpdat');
        Route::post('/mostpopularfood',[FoodProductController::class,'mostpopularfood'])->name('mostpopularfood');
        Route::post('/most_week_popular_food',[FoodProductController::class,'mostWeekPopularFood'])->name('mostWeekPopularFood');
        Route::post('/faq',[UserController::class,'faq'])->name('faq');
        Route::post('/food_item_location_price',[FoodProductController::class,'foodItemLocationPrice'])->name('foodItemLocationPrice');
        Route::post('/checkout',[PaymentController::class,'checkout'])->name('checkout');
        Route::post('/payment_request',[PaymentController::class,'payment_request'])->name('payment_request');
        Route::post('/payment_redirect',[PaymentController::class,'payment_redirect'])->name('payment_redirect');
        Route::post('/booking',[PaymentController::class,'booking'])->name('booking');

    });




    Route::post('/register',[AuthController::class,'register'])->name('register');
    Route::post('/verify',[AuthController::class,'verify'])->name('verify');
    Route::post('/login/sendotp', [AuthController::class, 'generate'])->name('user.login.sendotp');
    Route::post('/login/verifyotp', [AuthController::class, 'verifyOTP'])->name('user.login.verifyotp.submit');



    Route::post('/temples',[UserController::class,'templeShow'])->name('temples');
    Route::post('/location',[UserController::class,'location'])->name('location');
    Route::post('/category',[CategoryController::class,'category'])->name('category');
    Route::post('/inspiration',[CategoryController::class,'inspiration'])->name('inspiration');
    Route::post('/offer',[CategoryController::class,'offer'])->name('offer');


    Route::post('/contactus',[UserController::class,'contactus'])->name('contactus');


