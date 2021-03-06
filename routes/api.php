<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix'=>'v1','namespace'=>'Api','middleware'=>'auth:api'],function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/cafes','CafesController@getCafes');
    Route::post('/cafes','CafesController@postNewCafe');
    Route::get('/cafe/{id}','CafesController@getCafe');
});
