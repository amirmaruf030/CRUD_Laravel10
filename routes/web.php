<?php

use Illuminate\Support\Facades\Route;

// Route resource

// Route::resource('posts', 'PostController'); //Salah
Route::resource('/posts', \App\Http\Controllers\PostController::class);
