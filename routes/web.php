<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
