<?php

use App\Http\Controllers\user\PostController;
use Illuminate\Support\Facades\Route;

// Route::prefix('/user')->middleware(['active', 'auth'])->group(function () {
Route::prefix('/user')->group(function () {
    Route::redirect('/', '/user/post')->name('user');
    Route::get('/post', [PostController::class, 'index'])->name('user.post');
    Route::get('/post/show/{post}}', [PostController::class, 'show'])->name('user.post.show');
    Route::get('/post/crate', [PostController::class, 'create'])->name('user.post.create');
    Route::post('/post', [PostController::class, 'store'])->name('user.post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('user.post.show');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('user.post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('user.post.update');
    Route::delete('/post/{id}', [PostController::class, 'delete'])->name('user.post.delete');
    Route::post('/post/{id}/like', [PostController::class, 'like'])->name('user.post.like');
});

