<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LaravelFormApiController;

Route::get('/forms', [LaravelFormApiController::class, 'index']);
Route::get('/forms/{id}', [LaravelFormApiController::class, 'show']);