<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/author/{author}', [AuthorController::class, 'index']);

Route::get('/', [BookController::class, 'index']);
Route::get('/book/{book}', [BookController::class, 'book']);
