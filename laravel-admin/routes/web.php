<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/contact', [DashboardController::class, 'contact']);
Route::get('/about', [DashboardController::class, 'about']);