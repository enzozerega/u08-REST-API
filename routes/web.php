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

Route::get('/', "MainMenuController@mainMenu");

Route::get('/search', "SearchController@search");

Route::get('/result', "SearchController@search");

Route::post('/add', "CartController@addToCart");

Route::post('/addResult', "CartController@addSearch");

Route::get('/clearedCart', "CartController@clearCart");

Route::post('/buy', "CartController@buy"); //changed get to post

// New routes
Route::get('/cart', "CartController@openCart");
Route::post('/addOne', 'CartController@addOne');
Route::post('/removeOne', 'CartController@removeOne');