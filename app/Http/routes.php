<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// API Requests
Route::group(['prefix' => 'api/v1'], function () {
  
  Route::get('shops', 'API\ShopsController@list');
  Route::get('offers', 'API\OffersController@list');
  Route::get('shops/{id}', 'API\ShopsController@view')->where('id', '[0-9]+');
  Route::get('offers/{id}', 'API\OffersController@view')->where('id', '[0-9]+');
});

Route::get('/shops', 'ShopsController@list');
Route::get('/offers', 'OffersController@list');
Route::get('/shops/view/{id}', 'ShopsController@view')->where('id', '[0-9]+');
Route::get('/offers/view/{id}', 'OffersController@view')->where('id', '[0-9]+');
