<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [UserController::class,'show']);

// Post CRUD Routes

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{id}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('posts.destroy');
