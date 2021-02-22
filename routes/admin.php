<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy'])->names('users');

Route::resource('categories', CategoryController::class)->except('show')->names('categories');

Route::resource('tags', TagController::class)->except('show')->names('tags');

Route::resource('posts', PostController::class)->except('show')->names('posts');