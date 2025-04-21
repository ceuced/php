<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs', BlogController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get(
    '/auth/redirect/google',
    [App\Http\Controllers\GoogleController::class, 'redirect']
)->name('google.redirect');
Route::get(
    '/auth/callback/google',
    [App\Http\Controllers\GoogleController::class, 'callback']
)->name('google.callback');
