<?php


use Illuminate\Support\Facades\Route;
use function foo\func;

Route::prefix('admin')->group(function() {
Route::resource('center', 'CenterController');
});
