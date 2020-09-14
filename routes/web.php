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

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

////////////////////////////////////////////////////

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Auth::routes();
///////////////////////////////////////////////////////////

Route::get('/home', 'HomeController@index');

Route::get('/search', 'HomeController@search');

Route::get('/add_to_cart/{id}', 'HomeController@add_to_cart');

Route::get('/show_cart', 'HomeController@show_cart');

Route::get('/show_cart/{id}', 'HomeController@delete_cart_item');

/////////////////////////////////////////////////////////////////////////

//adding categories routes to the system
// Route::get('/view_category', 'CategoryController@index');

Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');


Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::post('/category/{id}', 'CategoryController@update');


Route::get('/category/destroy/{id}', 'CategoryController@destroy');

Route::resource('/category', 'CategoryController');
//////////////////////////////////////////////////////////////////////////

//adding products routes to the system

Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');


Route::get('/product/{id}/edit', 'ProductController@edit');
Route::post('/product/{id}', 'ProductController@update');

Route::get('/product/{id}', 'ProductController@show');

Route::get('/product/destroy/{id}', 'ProductController@destroy');

Route::get('/high_low', 'ProductController@price_high_low_product');

Route::get('/low_high', 'ProductController@price_low_high_product');

// Route::get('/filter_category/{name}', 'ProductController@filter_category');

// Route::get('/filter_price/{name}', 'ProductController@filter_price');

// Route::get('/filter_color/{name}', 'ProductController@filter_color');

Route::resource('/product', 'ProductController');
/////////////////////////////////////////////////////////////////////////

//adding order routes to the system

Route::get('/order', 'OrderController@checkout');

Route::post('/order', 'OrderController@store');

Route::get('/show_orders', 'OrderController@show_orders');

Route::get('/order/{id}', 'OrderController@order_details');







