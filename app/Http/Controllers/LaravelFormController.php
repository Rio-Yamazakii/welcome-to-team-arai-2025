<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Http\Request;

class LaravelFormController extends Controller
{
    public function index()
    {
        // laravel_formsテーブルからすべてのデータを取得
        $forms = LaravelForm::all();
        $technologies = LaravelTechnology::with('forms')->get();
        
        
        // ビューにデータを渡して表示
        return view('forms.index', compact('forms', 'technologies'));
        

    }
}