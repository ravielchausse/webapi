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

Route::get('/balance', 'BalanceController@index');
Route::get('/balance/{id}', 'BalanceController@show');

Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::delete('/user/{id}', 'UserController@destroy');
