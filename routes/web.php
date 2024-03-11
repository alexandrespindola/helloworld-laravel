<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/create', [UserController::class, 'create'])->name('user.create');

Route::resource('note', NoteController::class);

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
