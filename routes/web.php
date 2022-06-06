<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('article', App\Http\Controllers\ArticleController::class)->middleware('auth');
Route::resource('user', App\Http\Controllers\UserController::class)->middleware(['auth', 'role']);
Route::resource('client', App\Http\Controllers\ClientController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
