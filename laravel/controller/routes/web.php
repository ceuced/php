<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TestController::class)->group(function() {
    Route::get('/download', 'download');
    Route::get('/file', 'file')->name('file');
    Route::get('/json', 'json');
    Route::get('/redirect', 'redirect');
    Route::get('/away', 'away');
});

Route::resource('resources', ResourceController::class);