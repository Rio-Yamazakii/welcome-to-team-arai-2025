<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World!';
});
#index.blade.phpのファイルを直接指定
Route::get('/hello', function () {
    return view('index');
});