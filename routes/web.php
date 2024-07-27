<?php

use Illuminate\Support\Facades\Route;
use CommentController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/comment/index', [Commentcontroller::class, 'index'])->name('index');
Route::get('/comment/create', [Commentcontroller::class, 'create'])->name('create');
Route::get('/comment/store', [Commentcontroller::class, 'store'])->name('store');
Route::get('/comment/destroy', [Commentcontroller::class, 'destroy'])->name('destroy');