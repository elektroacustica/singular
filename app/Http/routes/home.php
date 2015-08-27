<?php

Route::group(['namespace' => 'Home'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
});
