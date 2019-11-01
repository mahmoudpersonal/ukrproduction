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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/login', function () {
//    return view('auth.login');
//});
Route::get('/', 'HomeController@index')->name('home');
Route::post('/change-language', 'HomeController@changeLang')->name('change-language');
Route::post('/upload-image', 'HomeController@uploadImage')->name('upload-image');
Route::post('/insert-study', 'HomeController@storeStudy')->name('front.study.store');
Auth::routes();
