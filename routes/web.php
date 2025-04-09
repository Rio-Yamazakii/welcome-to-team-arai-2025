<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

#index.blade.phpのファイルを直接指定
Route::get('/index', [FormController::class, 'index']);

