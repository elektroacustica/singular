<?php

Route::group(['namespace' => 'Like'], function()
{
    Route::post('like', ['as' => 'like', 'uses' => 'LikeController@save']);

    Route::get('like', ['as' => 'like.list', 'uses' => 'LikeController@lista']);

});
