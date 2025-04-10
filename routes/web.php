<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/form', [FormController::class, 'index']);

// Laravel Form管理システム用のルート
Route::prefix('laravel-forms')->group(function () {
    Route::get('/', [App\Http\Controllers\LaravelFormController::class, 'index'])->name('laravel-forms.index');
    Route::get('/create', [App\Http\Controllers\LaravelFormController::class, 'create'])->name('laravel-forms.create');
    Route::post('/', [App\Http\Controllers\LaravelFormController::class, 'store'])->name('laravel-forms.store');
    Route::get('/{id}', [App\Http\Controllers\LaravelFormController::class, 'laravelform'])->name('laravel-forms.laravelform');
    Route::get('/{id}/edit', [App\Http\Controllers\LaravelFormController::class, 'edit'])->name('laravel-forms.edit');
    Route::post('/{id}/update', [App\Http\Controllers\LaravelFormController::class, 'update'])->name('laravel-forms.update');
    Route::post('/{id}/delete', [App\Http\Controllers\LaravelFormController::class, 'destroy'])->name('laravel-forms.destroy');
});

Route::get('/react', function () {
    return view('react');
});
