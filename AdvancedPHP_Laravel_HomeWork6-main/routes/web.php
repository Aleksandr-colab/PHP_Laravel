<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [BookController::class, 'index'])->name('book-form');
Route::post('/store', [BookController::class, 'store'])->name('store-form');
