<?php

Route::group(['namespace' => 'BeWhy\Genesis\Controllers', 'middleware' => ['web']], function(){
    Route::get('/', 'GenesisController@index')->name('home');
    Route::get('genesis', 'GenesisController@docs')->name('genesis');
});
