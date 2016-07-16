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
Route::get('/', 'HomeController@index');
Route::get('/test', 'HomeController@index');

Route::post('/', 'Auth\AuthController@login');

Route::get('auth/google', 'Auth\AuthController@googleRedirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@googleHandleProviderCallback');

Route::get('auth/twitter', 'Auth\AuthController@twitterRedirectToProvider');
Route::get('auth/twitter/callback', 'Auth\AuthController@twitterHandleProviderCallback');