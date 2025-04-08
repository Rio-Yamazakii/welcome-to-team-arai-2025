<?php

use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\FormsTechnologiesController;

Route::get('/forms', [LaravelFormController::class, 'index']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/forms_technologies', [FormsTechnologiesController::class, 'index']);

