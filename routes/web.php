<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

Route::get('/post/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('post/update/{id}', [PostController::class, 'update'])->name('posts.update');