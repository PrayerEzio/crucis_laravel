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

$home_group = function(){
    Route::get('/','IndexController@index');
};

$admin_group = function(){
    Route::get('/','IndexController@index');
    Route::group(['prefix' => 'Index'],function(){
        Route::get('/','IndexController@index');
        Route::get('/index','IndexController@index');
        Route::get('/about_us','IndexController@about_us');
        Route::get('/billboard','IndexController@billboard');
    });
    Route::group(['prefix' => 'Mail'],function(){
        Route::get('/','MailController@inbox');
        Route::get('/inbox','MailController@inbox');
        Route::get('/index','MailController@inbox');
        Route::get('/detail','MailController@mail_detail');
        Route::get('/mail_detail','MailController@mail_detail');
        Route::get('/mail_compose','MailController@mail_compose');
    });
};

Route::group(['prefix' => '','namespace' => 'Home'],$home_group);

Route::group(['prefix' => 'Home','namespace' => 'Home'],$home_group);

Route::group(['prefix' => 'home','namespace' => 'Home'],$home_group);

Route::group(['prefix' => 'Admin','namespace' => 'Admin'],$admin_group);

Route::group(['prefix' => 'admin','namespace' => 'Admin'],$admin_group);