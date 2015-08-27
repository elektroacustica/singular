<?php

Route::group(['namespace' => 'User'], function()
{
	Route::get('S1/{id}', ['as' => 'profile', 'uses' => 'UserController@index']);
});
