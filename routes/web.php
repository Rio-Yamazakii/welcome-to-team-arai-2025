<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/', [FormController::class, 'index'])->name('index');
Route::get('/create', [FormController::class, 'create'])->name('create');
Route::post('/store', [FormController::class, 'store'])->name('store');
Route::get('/edit/{id}', [FormController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [FormController::class, 'update'])->name('update');
Route::post('/delete/{id}', [FormController::class, 'destroy'])->name('destroy');
