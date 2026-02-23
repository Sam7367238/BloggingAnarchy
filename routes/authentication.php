<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegistrationController::class, 'index'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store'])->name('register.store')->middleware("throttle:6,1");
    Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [AuthenticationController::class, 'logout'])->middleware('auth')->name('logout');
