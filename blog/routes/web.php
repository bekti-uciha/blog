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



Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');

Route::get('fileupload', 'FileController@fileUpload');
Route::post('fileupload', 'FileController@fileUploadPost')->name('fileUpload');

 Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');

Auth::routes();

Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('about', 'HomeController@about')->name('about');
Route::get('home', 'HomeController@index')->name('home');
Route::get('post','HomeController@post')->name('post');
Route::get('profil', 'HomeController@profil')->name('profil');
Route::get('welcome', 'HomeController@welcome')->name('welcome');
Route::get('page', 'HomeController@page')->name('page');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
