<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashbord');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
