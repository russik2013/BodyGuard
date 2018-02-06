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

Route::get('/', "HomeController@index");

Route::group(['prefix' => 'news'], function () {

    Route::post('pagination', "NewsController@pagination");
    Route::post('count', "NewsController@count");
    Route::get('{id}', "NewsController@one");
    Route::post('top', "NewsController@top");
    Route::post('events', "NewsController@events");

});
Route::get('callback', "CallBackController@callbackForm");
Route::post('callback', "CallBackController@callback");

Route::get('about', function (){

    return view('about');

});

Route::get('training', function (){

    return view('training');

});