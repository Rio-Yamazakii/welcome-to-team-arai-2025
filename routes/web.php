<?php

use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\FormsTechnologiesController;
use App\Http\Controllers\LaravelCrudFormController;
use Illuminate\Support\Facades\Route;


Route::get('/forms', [LaravelFormController::class, 'index']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/forms_technologies', [FormsTechnologiesController::class, 'index']);

// フォーム表示ルート
Route::get('/laravelform/create', [LaravelCrudFormController::class, 'create'])->name('laravelform.create');
// フォーム保存ルート
Route::post('/laravelform/store', [LaravelCrudFormController::class, 'store'])->name('laravelform.store');
// フォーム更新ルート
Route::put('/laravelform/{id}', [LaravelCrudFormController::class, 'update'])->name('laravelform.update');
// フォーム編集ルート
Route::get('/laravelform/{id}/edit', [LaravelCrudFormController::class, 'edit'])->name('laravelform.edit');
// フォーム削除ルート
Route::delete('/laravelform/{id}', [LaravelCrudFormController::class, 'destroy'])->name('laravelform.destroy');

//　ReactWelcomeページ
Route::get('/react-welcome', function () {
    return view('welcome_react');
});

// API経由でフォーム表示ページ
Route::get('/forms-api', function () {
    return view('forms');
});

// API経由でフォームデータを取得（JSON形式）
Route::get('/api/forms', [LaravelFormController::class, 'apiIndex']);
Route::post('/forms', [LaravelFormController::class, 'store']);  // フォーム送信
