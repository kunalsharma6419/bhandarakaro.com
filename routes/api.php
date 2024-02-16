<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
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
    // Route::post('/logout', [AuthController::class,'logout'])->name('logout');

});


// Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/verify',[AuthController::class,'phoneVerify'])->name('verify');
Route::get('/temples',[UserController::class,'templeShow'])->name('temples');
Route::post('/location',[UserController::class,'location'])->name('location');
Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::get('/inspiration',[CategoryController::class,'inspiration'])->name('inspiration');
Route::get('/offer',[CategoryController::class,'offer'])->name('offer');

