<?php

Route::group(['namespace' => 'User'], function()
{
	Route::get('cuestionario', ['as' => 'cuestionario', 'uses' => 'UserController@cuestionario']);
	
	Route::get('welcome/{name}', ['as' => 'profile', 'uses' => 'UserController@index']);

	Route::get('configuracion', ['as' => 'user.config', 'uses' => 'UserController@config']);

	Route::post('configuracion', ['as' => 'user.config', 'uses' => 'UserController@save']);
});
