<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/showclient', function () {
    return view('showclient');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::post('/client/save','ClientController@store');

Route::post('/product/save','ProductController@store');

Route::post('/sales/save','SaleController@store');



