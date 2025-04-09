<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;

Route::get('/hello', function () {
    return view('hello');

});

Route::get('/first-form', [LaravelFormController::class, 'form_tech_list']);

