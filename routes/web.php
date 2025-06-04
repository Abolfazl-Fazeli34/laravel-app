<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/period/5', [PeriodController::class, 'period'])->name('period');
Route::get('/login', [LoginController::class, 'index'])->name('login-get');
Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::get('/register', [RegisterController::class, 'index'])->name('register-get');
Route::post('/register', [RegisterController::class, 'register'])->name('register-post');
