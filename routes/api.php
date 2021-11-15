<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::post('/cart', [CartController::class, 'store']);

Route::delete('/cart/{itemId}', [CartController::class, 'destroy']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::post('/checkout', [CheckoutController::class, 'store']);
