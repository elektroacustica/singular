<?php

Route::group(['namespace' => 'Like'], function()
{
    Route::post('S1/like', ['as' => 'like', 'uses' => 'LikeController@save']);

    Route::get('like', ['as' => 'like.list', 'uses' => 'LikeController@lista']);

    Route::post('not-like', ['as' => 'dislike', 'uses' => 'LikeController@dislike']);
});
