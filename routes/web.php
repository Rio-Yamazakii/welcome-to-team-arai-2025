<?php

use Illuminate\Support\Facades\Route;

#index.blade.phpのファイルを直接指定
Route::get('/hello', function () {
    return view('index');
});