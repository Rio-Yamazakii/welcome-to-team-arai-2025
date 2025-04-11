<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaravelForm;
use Illuminate\Http\Request;

class FormApiController extends Controller
{
    public function index()
    {
        $forms = LaravelForm::all();
        return response()->json($forms);
    }
}