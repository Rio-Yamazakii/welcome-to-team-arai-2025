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
        $firstRecord = LaravelForm::first();
        $technologies = LaravelTechnology::all();
        $usersWithLanguages = DB::table('laravel_forms as f')
            ->join('laravel_technologies as t', 'f.techID', '=', 't.techID')
            ->select('f.name', 'f.age', 't.lang')
            ->get();
        return view('laravel-form.index', compact('firstRecord', 'technologies', 'usersWithLanguages'));
    }
}