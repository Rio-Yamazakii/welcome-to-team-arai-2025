<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;

class LaravelFormController extends Controller
{
    public function index()
    {
        // laravel_formsテーブルからすべてのデータを取得
        $forms = LaravelForm::all();
        
        // ビューにデータを渡して表示
        return view('forms.index', compact('forms'));
    }
}
