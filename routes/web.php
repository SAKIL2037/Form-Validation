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

Route::get('/','InfoController@index');
Route::get('/adddata','InfoController@adddata');
Route::get('/feValidation','InfoController@form');


Route::post('/store','InfoController@store');

Route::post('/test','InfoController@test');


