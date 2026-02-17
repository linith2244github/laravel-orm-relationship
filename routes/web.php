<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
