<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelForm; // モデルをインポート

class LaravelCrudFormController extends Controller
{
    // フォームを表示
    public function create()
    {
        $forms = LaravelForm::all(); // 登録されたデータ全部取得
        return view('laravelform.create', compact('forms'));
    }

    //更新用
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer',
            'tech_ID' => 'required|integer',
        ]);

        $form = LaravelForm::findOrFail($id);
        $form->update($validated);

        return redirect()->route('laravelform.create')->with('success', '更新しました！');
    }


    // 削除用
    public function destroy($id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->delete();

        return redirect()->route('laravelform.create')->with('success', '削除しました！');
    }

    //#8 編集用
    public function edit($id)
    {
        $form = LaravelForm::findOrFail($id);
        return view('laravelform.edit', compact('form'));
    }

    // フォームからのデータを保存
    public function store(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:1',
            'tech_ID' => 'required|integer', // もしテーブルとの関連がある場合は修正
        ]);

        // データの保存
        LaravelForm::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'age' => $validated['age'],
            'tech_ID' => $validated['tech_ID'],
        ]);

        // 保存後、リダイレクトやメッセージを返す
        return redirect()->route('laravelform.create')->with('success', 'フォームが正常に保存されました！');
    }
}
