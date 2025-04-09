<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Technologies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form1 = Form::find(1);
        $forms = Form::with('technologies')->get();
        $technologies = Technologies::all();

        return view('index')->with([
            'form1' => $form1,
            'forms' => $forms,
            'technologies' => $technologies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:forms',
            'age' => 'required|integer|min:1',
            'technologies_id' => 'required|exists:technologies,id',
        ]);

        Form::create($request->all());

        return redirect()->route('member.show')->with('success', '登録が完了しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        $forms = Form::with('technologies')->get();// 全技術者リスト
        $technologies = Technologies::all(); // 言語一覧を取得
        
        return view('technologymembers.index', compact('forms', 'technologies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //編集ページに遷移
    public function edit(Form $form)
    {
        $technologies = Technologies::all(); // 言語一覧を取得
        return view('technologymembers.edit', compact('form', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:forms,email,' . $form->id, // 重複チェック
            'age' => 'required|integer|min:1',
            'technologies_id' => 'required|exists:technologies,id',
        ]);

        $form->update($request->all());

        return redirect()->route('member.show')->with('success', '更新が完了しました');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('member.show')->with('success', '削除が完了しました');
    }
    
}
