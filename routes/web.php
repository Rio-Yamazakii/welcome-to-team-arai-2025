<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaravelFormController;



#Hello.blade.phpのファイルを直接指定
Route::get('/hello', function () {
    return view('Hello');
});

##Route::get('/form', [FormController::class, 'index']
##);
// Route::get('/forms', [LaravelFormController::class, 'index']);

Route::get('/forms', [LaravelFormController::class, 'index'])->name('forms.index');
Route::get('/forms/create', [LaravelFormController::class, 'create'])->name('forms.create');
Route::post('/forms', [LaravelFormController::class, 'store'])->name('forms.store');
Route::get('/forms/edit/{id}', [LaravelFormController::class, 'edit'])->name('forms.edit');
Route::put('/forms/{id}', [LaravelFormController::class, 'update'])->name('forms.update');
Route::post('/forms/delete/{id}', [LaravelFormController::class, 'destroy'])->name('forms.destroy');

Route::get('/react', function () {
    return view('react');
})->name('react.page');



