<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', "home");
Route::resource("/posts", PostController::class);

require __DIR__ . "/authentication.php";
