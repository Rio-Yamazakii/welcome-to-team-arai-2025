<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        // ①最初のレコードを取得
        $firstRecord = LaravelForm::first();
        
        // ②全ての技術を取得
        $technologies = LaravelTechnology::all();
        
        // ③名前、年齢、得意な言語を全て取得（JOINを使用）
        $usersWithLanguages = DB::table('laravel_forms as f')
            ->join('laravel_technologies as t', 'f.technology_id', '=', 't.technology_id')
            ->select('f.name', 'f.age', 't.language_name')
            ->get();
        
        return view('form.index', compact('firstRecord', 'technologies', 'usersWithLanguages'));
    }
}