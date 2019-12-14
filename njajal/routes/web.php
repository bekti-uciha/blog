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

Route::get('/register', 'AuthController@getregister');
Route::post('/register', 'AuthController@postregister')->name('register');
Route::get('/login', 'AuthController@postlogin');
Route::post('/login', 'AuthController@postlogin')->name('login');
