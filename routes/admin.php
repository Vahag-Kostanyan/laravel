<?php

use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['active', 'admin'])->group(function () {
    Route::redirect('/', '/admin/post')->name('admin');

    Route::get('/post', [PostController::class, 'index'])->name('admin.post');
    Route::get('/post/create', [PostController::class, 'create'])->name('admin.post.crete');
    Route::post('/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('admin.post.show');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/post/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
    Route::post('/post/{id}/like', [PostController::class, 'like'])->name('admin.post.like');
});

