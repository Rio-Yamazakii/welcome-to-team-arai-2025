<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;

Route::get('/hello', function () {
    return view('hello');

});

Route::get('/first-form', [LaravelFormController::class, 'form_tech_list']);

Route::get('/forms/create', [LaravelFormController::class, 'create'])->name('forms.create');
Route::post('/forms', [LaravelFormController::class, 'store'])->name('forms.store');
Route::get('/forms', [LaravelFormController::class, 'index'])->name('forms.index');
Route::get('/forms/{form}/edit', [LaravelFormController::class, 'edit'])->name('forms.edit');
Route::put('/forms/{form}', [LaravelFormController::class, 'update'])->name('forms.update');
Route::delete('/forms/{form}', [LaravelFormController::class, 'destroy'])->name('forms.destroy');


Route::get('/', [LaravelFormController::class, 'form_tech_list'])->name('forms.index');

Route::get('/forms/create', [LaravelFormController::class, 'create'])->name('forms.create');
Route::post('/forms', [LaravelFormController::class, 'store'])->name('forms.store');

Route::get('/forms/{form_id}/edit', [LaravelFormController::class, 'edit'])->name('forms.edit');
Route::put('/forms/{form_id}', [LaravelFormController::class, 'update'])->name('forms.update');

Route::delete('/forms/{form_id}', [LaravelFormController::class, 'destroy'])->name('forms.destroy');

Route::get('/react', function () {
    return view('react');
})->name('react.page');