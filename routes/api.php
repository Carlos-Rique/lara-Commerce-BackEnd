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


Route::get('/products', 'ProductsController@index')->name('products.index');

Route::post('/orders/store', 'OrdersController@store')->name('orders.store');
Route::post('/orders_products/store', 'Orders_ProductsController@store')->name('orders_products.store');
