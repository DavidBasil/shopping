<?php

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

Route::get('products', 'ProductsController@index')->name('allProducts');

Route::get('products/addtocart/{id}', 'ProductsController@addProductToCart')->name('addProductToCart');

Route::get('cart', 'ProductsController@showCart')->name('cartproducts');
Route::get('products/deleteItemFromCart/{id}', 'ProductsController@deleteItemFromCart')
    ->name('deleteItemFromCart');
