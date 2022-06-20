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

Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create')->middleware('auth');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/products/{product}/edit', 'ProductsController@edit')->middleware('auth');
Route::patch('/products/{product}', 'ProductsController@update');
Route::post('/products', 'ProductsController@store')->middleware('auth');
Route::delete('/products/{product}', 'ProductsController@destroy')->middleware('auth');


//cart
Route::get('cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart')->middleware('auth');
Route::patch('update-cart', 'ProductsController@updated');
Route::delete('remove-from-cart', 'ProductsController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
