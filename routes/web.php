<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
// use App\Http\Controllers\PostController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/create', [UserController::class, 'create'])->name('user.create');

// Route::get('/note/{id?}', [NoteController::class, 'index'])->name('note.index');

Route::resource('note', NoteController::class);

// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
// Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
// Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
// Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
// Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
// Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

// Route::resource('posts', PostController::class);
