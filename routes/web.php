<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#index.blade.phpのファイルを直接指定
Route::get('/hello', function () {
    return view('index');
});

