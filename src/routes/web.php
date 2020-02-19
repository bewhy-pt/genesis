<?php
/*
Route::group(['namespace' => 'BeWhy\Genesis\Controllers', 'middleware' => ['web']], function(){
    Route::get('/', 'GenesisController@index')->name('home');
    Route::get('genesis', 'GenesisController@docs')->name('genesis');
});
*/

Route::get('/', [BeWhy\Genesis\Controllers\GenesisController::class, 'index'])->name('home');
Route::get('genesis', [BeWhy\Genesis\Controllers\GenesisController::class, 'docs'])->name('genesis');
