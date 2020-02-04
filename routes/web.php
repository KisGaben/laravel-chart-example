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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', "TestController@index");
Route::get('/home', "TestController@home");
Route::get('/exit', "TestController@out");
Route::get('/json', "TestController@json");
Route::get('/chart', "TestController@chart");
Route::get('/data/{id}', "TestController@data");
