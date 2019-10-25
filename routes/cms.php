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
Route::post('cities', 'CityController@getByCountry')->name('cities.byCountry');
});
