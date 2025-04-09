<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Http\Request;

class LaravelFormController extends Controller
{
    public function index()
    {
        // laravel_formsテーブルからすべてのデータを取得
        $forms = LaravelForm::all();
        $technologies = LaravelTechnology::all();

        // ビューにデータを渡して表示
        return view('forms.index', compact('forms', 'technologies'));
    }

    public function create()
    {
        // LaravelTechnologyモデルからすべての技術を取得
        $technologies = LaravelTechnology::all();

        // ビューに技術データを渡して表示
        return view('forms.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $form = new LaravelForm();
        $form->name = $request->input('name');
        $form->mail_address = $request->input('mail_address');
        $form->age = $request->input('age');
        $form->tech_ID = $request->input('tech_ID');
        $form->save();

        return redirect()->route('forms.index');
    }
    public function edit($id)
    {
        $form = LaravelForm::findOrFail($id);
        $technologies = LaravelTechnology::all();
        return view('forms.edit', compact('form', 'technologies'));
    }

    public function update(Request $request, $id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->name = $request->input('name');
        $form->mail_address = $request->input('mail_address');
        $form->age = $request->input('age');
        $form->tech_ID = $request->input('tech_ID');
        $form->save();

        return redirect()->route('forms.index');
    }

    public function destroy($id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->delete(); // 論理削除

        return redirect()->route('laravel-forms.index')->with('success', '削除完了！');
    }
}