<?php

Route::group(['namespace' => 'Like'], function()
{
    Route::post('S1/like', ['as' => 'like', 'uses' => 'LikeController@save']);
});
