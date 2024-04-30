<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', [User::class], 'create');
Route::post('/login', [LoginController::class], 'auth');
Route::get('/', [User::class], 'createcsrf_token');

