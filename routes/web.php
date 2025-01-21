<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'process'])->name('login.process');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/users', function(){
    return view('users.index');
})->name('users')->middleware('auth');

Route::get('/report',[ReportController::class, 'index'])->name('report')->middleware('auth');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction')->middleware('auth');

Route::get('/cars',[CarController::class, 'index'])->name('cars')->middleware('auth');