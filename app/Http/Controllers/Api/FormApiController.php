<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaravelForm;

class FormApiController extends Controller
{
    public function index()
    {
        $forms = LaravelForm::all(); // データベースの全レコードを取得
        return response()->json($forms); // JSONで返す
    }
}