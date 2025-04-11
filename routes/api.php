<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FormApiController;

Route::get('/forms', [FormApiController::class, 'index']);
Route::get('/forms/{id}', [FormApiController::class, 'show']);