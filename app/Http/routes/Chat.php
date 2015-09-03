<?php

Route::group(['namespace' => 'Chat'], function()
{
    Route::get('chat', ['as' => 'chat.index', 'uses' => 'ChatController@index']);

    Route::get('chat/{id}', ['as' => 'chat', 'uses' => 'ChatController@chat']);
});
