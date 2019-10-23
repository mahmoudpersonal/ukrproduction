<?php


use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
Route::resource('center', 'CenterController');
Route::resource('patient', 'PatientController');
Route::resource('study', 'StudyController');
Route::post('cities', 'CityController@getByCountry')->name('cities.byCountry');
});
