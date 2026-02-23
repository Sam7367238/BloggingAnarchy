<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('/posts', PostController::class);

Route::middleware('auth')->group(function () {
    Route::view('/profile', 'profile')->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'resetPassword'])->name('profile.resetPassword');
});

require __DIR__.'/authentication.php';
