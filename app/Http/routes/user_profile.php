<?php

Route::group(['namespace' => 'User'], function()
{
	Route::get('cuestionario', ['as' => 'cuestionario', 'uses' => 'UserController@cuestionario']);
	
	Route::get('S1/{id}', ['as' => 'profile', 'uses' => 'UserController@index']);
});
