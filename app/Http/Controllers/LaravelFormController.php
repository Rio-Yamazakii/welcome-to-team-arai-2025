<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaravelFormController extends Controller
{
    /**
     * 一覧表示
     */
    public function index()
    {
        $forms = LaravelForm::with('technology')->get();
        return view('laravel-forms.index', compact('forms'));
    }

    /**
     * 登録フォーム表示
     */
    public function create()
    {
        $technologies = LaravelTechnology::all();
        return view('laravel-forms.create', compact('technologies'));
    }

    /**
     * データ保存処理
     */
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'age' => 'nullable|integer',
            'technology_id' => 'required|exists:laravel_technologies,technology_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('laravel-forms.create')
                ->withErrors($validator)
                ->withInput();
        }

        // データ保存
        $form = new LaravelForm();
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->age = $request->input('age');
        $form->technology_id = $request->input('technology_id');
        $form->save();

        return redirect()->route('laravel-forms.index')->with('success', '登録が完了しました！');
    }

    /**
     * 詳細表示
     */
    public function show($id)
    {
        $form = LaravelForm::with('technology')->findOrFail($id);
        return view('laravel-forms.show', compact('form'));
    }

    /**
     * 編集フォーム表示
     */
    public function edit($id)
    {
        $form = LaravelForm::findOrFail($id);
        $technologies = LaravelTechnology::all();
        return view('laravel-forms.edit', compact('form', 'technologies'));
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'age' => 'nullable|integer',
            'technology_id' => 'required|exists:laravel_technologies,technology_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('laravel-forms.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // データ更新
        $form = LaravelForm::findOrFail($id);
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->age = $request->input('age');
        $form->technology_id = $request->input('technology_id');
        $form->save();

        return redirect()->route('laravel-forms.show', $id)->with('success', '更新が完了しました！');
    }

    /**
     * 削除処理（論理削除）
     */
    public function destroy($id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->delete(); // SoftDeletesトレイトを使用しているので論理削除になります

        return redirect()->route('laravel-forms.index')->with('success', '削除が完了しました！');
    }
}