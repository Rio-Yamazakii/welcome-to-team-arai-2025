<?php

use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\FormsTechnologiesController;
use App\Http\Controllers\LaravelCrudFormController; //#8
use Illuminate\Support\Facades\Route;


Route::get('/forms', [LaravelFormController::class, 'index']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/forms_technologies', [FormsTechnologiesController::class, 'index']);

// #8
// フォームを表示するルート
Route::get('/laravelform/create', [LaravelCrudFormController::class, 'create'])->name('laravelform.create');
// フォーム送信後にデータを保存するルート
Route::post('/laravelform/store', [LaravelCrudFormController::class, 'store'])->name('laravelform.store');

// 更新用のルート
Route::put('/laravelform/{id}', [LaravelCrudFormController::class, 'update'])->name('laravelform.update');

//編集用のルート
Route::get('/laravelform/{id}/edit', [LaravelCrudFormController::class, 'edit'])->name('laravelform.edit');

// 削除用のルート
Route::delete('/laravelform/{id}', [LaravelCrudFormController::class, 'destroy'])->name('laravelform.destroy');

//Reactのようこそページ
Route::get('/react-welcome', function () {
    return view('welcome_react');
});

//#18
Route::get('/forms-api', function () {
    return view('forms');
});

// API経由でフォームデータを取得（JSON形式）
Route::get('/api/forms', [LaravelFormController::class, 'apiIndex']);
