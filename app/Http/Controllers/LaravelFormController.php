<?php

namespace App\Http\Controllers;

use App\Services\FormService;
use Illuminate\Http\Request;
use App\Models\LaravelForm; // モデルのインポート
use Illuminate\Support\Facades\Validator; // バリデーターを使用

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
        $forms = $this->formService->getAllForms();  // サービスクラスを使ってフォームデータを取得
        return view('forms.index', compact('forms'));
    }

    // API用フォームデータの取得
    public function apiIndex()
    {
        $forms = $this->formService->getAllForms(); // サービスクラスを使ってフォームデータを取得
        return response()->json($forms);
    }

    // 新しいフォームの保存
    public function store(Request $request)
    {
        // バリデーションルールを定義
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer|min:0|max:100',
            'location' => 'required|string',
            'language' => 'required|string',
        ];

        // バリデーションの実行
        $validator = Validator::make($request->all(), $rules);

        // バリデーションエラーがあれば、エラーメッセージを返す
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);  // 422 Unprocessable Entity
        }

        // バリデーションを通過したデータを保存
        $form = $this->formService->createForm($request->all());

        // 成功時のレスポンス
        return response()->json([
            'message' => 'データが正常に保存されました。',
            'form' => $form
        ], 201);
    }
}
