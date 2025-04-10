<?php

namespace App\Http\Controllers;

use App\Services\FormService;

class LaravelFormController extends Controller
{
    protected $formService;

    // コンストラクタでサービスを注入
    public function __construct(FormService $formService)
    {
        $this->formService = $formService;
    }

    // フォーム一覧ページの表示
    public function index()
    {
        // フォームデータをサービスクラスで取得
        $forms = $this->formService->getAllForms();  // サービスクラスを使ってフォームデータを取得
        
        // ビューにデータを渡して表示
        return view('forms.index', compact('forms'));
    }

    public function apiIndex()
    {
        // サービスクラスを使ってフォームデータを取得
        $forms = $this->formService->getAllForms(); // サービスクラスを使ってフォームデータを取得

        // JSON形式でデータを返す
        return response()->json($forms);
    }
}
