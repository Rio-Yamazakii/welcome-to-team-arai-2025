<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $firstForm = LaravelForm::first();

        $technologies = LaravelTechnology::all();

        $formWithTech = DB::table('laravel_forms')
            ->join('laravel_technologies', 'laravel_forms.techID', '=', 'laravel_technologies.techID')
            ->select('laravel_forms.name', 'laravel_forms.age', 'laravel_technologies.lang')
            ->get();

        return view('index', compact('firstForm', 'technologies', 'formWithTech'));
    }
}
