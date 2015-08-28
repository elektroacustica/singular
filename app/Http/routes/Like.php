<?php

Route::group(['namespace' => 'Like'], function()
{
    Route::get('S1/like/{user_id}/{candidato}', ['as' => 'like', 'uses' => 'LikeController@save']);
});
