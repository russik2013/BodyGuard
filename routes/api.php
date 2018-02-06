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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth', "HomeController@auth");

Route::group(['middleware' => 'user'], function () {

    Route::group(['prefix' => 'access'], function () {

        Route::post('read', "UserController@read");
        Route::post('update', "UserController@update");

    });

    Route::group(['prefix' => 'news'], function () {

        Route::post('list', "NewsController@index");
        Route::post('store', "NewsController@store");
        Route::post('update', "NewsController@update");
        Route::post('delete', "NewsController@delete");

    });

});

Route::group(['prefix' => 'public'], function () {

    Route::group(['prefix' => 'news'], function () {

        Route::post('pagination', "NewsController@pagination");
        Route::post('count', "NewsController@count");
        Route::post('one', "NewsController@one");
        Route::post('top', "NewsController@top");
        Route::post('events', "NewsController@events");

    });

    Route::post('callback', "CallBackController@callback");

});