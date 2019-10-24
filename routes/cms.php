<?php


use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
Route::resource('center', 'CenterController');
Route::resource('patient', 'PatientController');
Route::resource('study', 'StudyController');
Route::resource('radiologist', 'RadiologistController');
Route::resource('report', 'ReportController');
Route::post('cities', 'CityController@getByCountry')->name('cities.byCountry');
});
