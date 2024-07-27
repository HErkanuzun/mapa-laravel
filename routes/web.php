<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/dasboard/comment/index', [CommentController::class, 'index'])->name('comment_index');
Route::get('/dasboard/comment/create', [CommentController::class, 'create'])->name('comment_create');
Route::post('/dasboard/comment/store', [CommentController::class, 'store'])->name('comment_store');
Route::get('/dasboard/comment/destroy/{id}', [CommentController::class, 'destroy'])->name('comment_destroy');

