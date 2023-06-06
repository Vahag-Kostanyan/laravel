<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

Route::get('/test', TestController::class)->name('test')->middleware('token:secret');

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login/create', [loginController::class, 'store'])->name('login.store');
    
    Route::get('/register', [registerController::class, 'index'])->name('register');
    Route::post('/register/create', [registerController::class, 'store'])->name('register.store');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{id}/like', [BlogController::class, 'like'])->name('blog.like');


Route::redirect('/home', '/')->name('redirect.home');  