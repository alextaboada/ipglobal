<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

Route::get('/post/{id}', [PostController::class, 'getPost'])->name('api.show');
Route::post('/post', [PostController::class,'StorePost'])->name('api.create');