<?php

use App\Http\Controllers\AdminConroller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome']);