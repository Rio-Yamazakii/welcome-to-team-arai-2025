<?php

namespace App\Http\Controllers;

use App\Models\LaravelTechnology;

class TechnologyController extends Controller
{
    public function index()
    {
        // LaravelTechnology モデルから技術IDと得意な言語を取得
        $technologies = LaravelTechnology::all();
        
        // ビューに渡す
        return view('technologies.index', compact('technologies'));
    }
}
