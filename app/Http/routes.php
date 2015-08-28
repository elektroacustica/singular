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

require 'routes/home.php';
require 'routes/user_profile.php';
require 'routes/like.php';

// Authentication routes...
Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin' ,'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);

// Registration routes...
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'register']);

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('{provider}', ['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'provider']);
Route::get('{provider}/callback', 'Auth\AuthController@handleProviderCallback');


