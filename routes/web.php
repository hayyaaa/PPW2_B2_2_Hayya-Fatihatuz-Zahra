<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//route resource
// Route::resource('/post', \App\Http\Controllers\PostController::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::post('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::post('/post/update/{id}', [BPostController::class, 'update'])->name('post.update');
