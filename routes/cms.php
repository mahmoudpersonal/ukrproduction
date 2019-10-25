<?php


use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
Route::resource('center', 'CenterController');
Route::resource('patient', 'PatientController');
Route::resource('study', 'StudyController');
Route::resource('radiologist', 'UserController');
Route::resource('report', 'ReportController');
Route::resource('country', 'CountryController');
Route::resource('city', 'CityController');
Route::resource('area', 'AreaController');
Route::resource('user', 'UserController');
Route::get('language/create', 'LanguageController@index')->name('language.index');
Route::post('language/update', 'LanguageController@update')->name('language.update');
Route::post('cities', 'CityController@getByCountry')->name('cities.byCountry');
});
