<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show')->where('id', '[0-9]+');


// Добавить middleware admin
Route::get('/', [AdminController::class, 'index'])->name('admin.index');

// Posts
Route::get('/posts', [AdminPostController::class, 'index'])->name('admin.posts.index');
Route::get('/posts/{id}', [AdminPostController::class, 'show'])->name('admin.posts.show')->where('id', '[0-9]+');
Route::get('/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
Route::post('/posts', [AdminPostController::class, 'store'])->name('admin.posts.store');

// Users
Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/users/{id}', [AdminUserController::class, 'show'])->name('admin.users.show')->where('id', '[0-9]+');
Route::put('/users/update/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
