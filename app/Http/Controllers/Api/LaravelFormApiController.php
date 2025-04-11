<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaravelForm;
use Illuminate\Http\Request;

class LaravelFormApiController extends Controller
{
    /**
     * フォーム一覧をJSON形式で返す
     */
    public function index()
    {
        $forms = LaravelForm::with('technology')->get();
        return response()->json($forms);
    }

    /**
     * 特定のフォームをJSON形式で返す
     */
    public function show($id)
    {
        $form = LaravelForm::with('technology')->findOrFail($id);
        return response()->json($form);
    }
}