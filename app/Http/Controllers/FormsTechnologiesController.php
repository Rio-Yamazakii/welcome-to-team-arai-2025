<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;

class FormsTechnologiesController extends Controller
{
    public function index()
    {
        $forms = LaravelForm::with('technology')->get();
        return view('forms_technologies.index', compact('forms'));
    }
}
