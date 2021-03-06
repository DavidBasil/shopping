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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin routes
Route::get('admin/products', 'Admin\AdminProductsController@index')
    ->name('adminDisplayProducts');
Route::get('admin/editProductForm/{id}', 'Admin\AdminProductsController@editProductForm')->name('adminEditProductForm');
Route::get('admin/editProductImageForm/{id}', 'Admin\AdminProductsController@editProductImageForm')->name('adminEditProductImageForm');
Route::post('admin/updateProductImage/{id}', 'Admin\AdminProductsController@updateProductImage')->name('adminUpdateProductImage');
