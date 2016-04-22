<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => '','namespace' => 'Home'],function(){
    Route::get('/','IndexController@index');
});

Route::group(['prefix' => 'Home','namespace' => 'Home'],function(){
    Route::get('/','IndexController@index');
});

Route::group(['prefix' => 'Admin','namespace' => 'Admin'],function(){
    Route::get('/','IndexController@index');
    Route::group(['prefix' => 'Index'],function(){
        Route::get('/','IndexController@index');
        Route::get('/index','IndexController@index');
        Route::get('/about_us','IndexController@about_us');
        Route::get('/billboard','IndexController@billboard');
    });
});