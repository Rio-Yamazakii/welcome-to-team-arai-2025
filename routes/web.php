<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaravelFormController;



#Hello.blade.phpのファイルを直接指定
Route::get('/hello', function () {
    return view('Hello');
});

##Route::get('/form', [FormController::class, 'index']
##);
Route::get('/forms', [LaravelFormController::class, 'index']);


