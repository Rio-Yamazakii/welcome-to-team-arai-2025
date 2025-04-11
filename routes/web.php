<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::get('/form/create', [FormController::class, 'create'])->name('form.create');
Route::post('/form', [FormController::class, 'store'])->name('form.store');
Route::post('/form/{id}/update', [FormController::class, 'update'])->name('form.update');
Route::get('/form/{id}/edit', [FormController::class, 'edit'])->name('form.edit');
Route::delete('/form/{id}/delete', [FormController::class, 'destroy'])->name('form.destroy');

Route::get('/react-test', function () {
    return view('react');
})->name('react.test');
