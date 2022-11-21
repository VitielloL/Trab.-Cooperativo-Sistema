<?php

use App\Base\Http\Controllers\HomeController;
use App\Base\Http\Controllers\LoginController;
use App\Job\Http\Controllers\JobController;
use App\Profile\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('profile')->group(function ( ) {
        Route::get('/',[ProfileController::class,'index'])->name('profile');
        Route::post('/store',[ProfileController::class,'store'])->name('profile.store');
        Route::post('/update',[ProfileController::class,'update'])->name('profile.update');
    });

    Route::prefix('job')->group(function ( ) {
        Route::get('/',[JobController::class,'index']);
        Route::post('/store',[JobController::class,'store']);
        Route::post('/update/{id}',[JobController::class,'update']);
        Route::delete('/delete/{id}',[JobController::class,'delete']);
    });
});


