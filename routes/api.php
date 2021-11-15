<?php

use Illuminate\Http\Request;
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

Route::post('/cart', function(){
    return 'Add product + quantity...';
});

Route::delete('/cart/{itemId}', function(Request $request, $itemId){
    return sprintf('Removing items %s...', $itemId);
});

Route::get('/cart', function(){
    return 'List all products from cart...';
});

Route::get('/products', function(){
    return 'Getting product list from 3rd party API...';
});

Route::post('/checkout', function(){
    return 'Checkout section...';
});
