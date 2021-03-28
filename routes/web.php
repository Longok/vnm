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
//admin
Route::get('admin', 'AdminController@index')->name('admin');
Route::post('admin','AdminController@postAdminLogin')->name('adminlogin');
Route::get('logout','AdminController@logout');
//Home
Route::get('/home','HomeController@index');
Route::get('/home/category/{id}','HomeController@category');
//Category
Route::get('category','CategoryController@create');
Route::post('/addCategory','CategoryController@store')->name('add-category');
Route::get('/all-category','CategoryController@index');
Route::get('/edit-category/{id}','CategoryController@edit');
Route::post('/update-category/{id}','CategoryController@update');
Route::get('/delete-category/{id}','CategoryController@delete');
//Products
Route::get('product','ProductController@create');
Route::post('/addProduct','ProductController@store')->name('add-product');
Route::get('/all-product','ProductController@index');
Route::get('/list-product/{id}','ProductController@list');
Route::get('/edit-product/{id}','ProductController@edit');
Route::post('/update-product/{id}','ProductController@update');
Route::get('/delete-product/{id}','ProductController@delete');
//Slide
Route::get('slide','SlideController@create');
Route::post('/add-slide','SlideController@store');
Route::get('/all-slide','SlideController@index');
Route::get('/delete-slide/{id}','SlideController@delete');
//User
Route::get('/sign-up','UserController@create');
Route::post('/sign-up','UserController@store')->name('sign-up');
Route::get('/list-user','UserController@index');
//Cart
Route::post('/cart/{id}', 'CartController@add')->name('cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart/','CartController@update_cart');
//Checkout
Route::get('check-out');
//Log-in
Route::get('login','UserController@getLogin')->name('login');
Route::post('login','UserController@postLogin')->name('login');
//Log-out
Route::get('logout','UserController@logout');


