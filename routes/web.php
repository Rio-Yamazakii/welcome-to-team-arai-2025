<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

#index.blade.phpのファイルを直接指定
Route::get('/index', [FormController::class, 'index']);
Route::get('/memberlist', [FormController::class, 'show'])->name('member.show');
Route::post('/memberlist', [FormController::class, 'store'])->name('member.store');
Route::get('/memberlist/{form}/edit', [FormController::class, 'edit'])->name('member.edit');
Route::put('/memberlist/{form}', [FormController::class, 'update'])->name('member.update');
Route::delete('/memberlist/{form}', [FormController::class, 'destroy'])->name('member.destroy');

//Reactのルーティング
Route::get('/react', function () {
    return view('react');
});