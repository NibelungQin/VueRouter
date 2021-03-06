<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Web')->group(function (){
    Route::get('/','AppController@getApp');
    Route::get('/login','AppController@getLogin')->name('login')->middleware('guest');

    Route::get('/auth/{social}','AuthenticationController@getSocialRedirect')->middleware('guest');
    Route::get('/auth/{social}/callback','AuthenticationController@getSocialCallback')->middleware('guest');
});
