<?php

Route::group(['namespace' => 'Home'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

	Route::get('cuentas', ['as' => 'user.compras', 'uses' => 'HomeController@compras']);
});
