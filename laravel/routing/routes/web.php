<?php

use App\Http\Controllers\AdminConroller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('namedroute');
});

Route::post('/', function () {
    return 'post';
});

Route::put('/', function () {
    return 'put';
});

Route::patch('/', function () {
    return 'patch';
});

Route::delete('/', function () {
    return 'delete';
});

Route::options('/', function () {
    return 'options';
});

Route::get('students/{id}', function($id) {
    return 'Your student number is ' . $id;
})->where('id', '[0-9]{4}-[0-9]{5}');

// Without Route Group
// Route::get('/admin/dashboard', [AdminConroller::class, 'dashboard']);
// Route::get('/admin/users', [AdminConroller::class, 'users']);
// Route::get('/admin/settings', [AdminConroller::class, 'settings']);

// Route Group
Route::controller(AdminConroller::class)->prefix('/admin')->group(function() {
    Route::get('/dashboard', 'dashboard');
    Route::get('/users', 'users');
    Route::get('/somerandomroute', 'settings')->name('settings');
});