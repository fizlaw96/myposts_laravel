<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);

Route::resource('posts', 'App\Http\Controllers\PostController');
