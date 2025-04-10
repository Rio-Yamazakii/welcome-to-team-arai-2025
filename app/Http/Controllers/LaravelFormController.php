<?php

namespace App\Http\Controllers;

use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaravelFormController extends Controller
{

    public function index()
    {
        $forms = LaravelForm::with('technology')->get();
        return view('laravel-forms.index', compact('forms'));
    }

    public function create()
    {
        $technologies = LaravelTechnology::all();
        return view('laravel-forms.create', compact('technologies'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mailaddres' => 'required|email|max:255',
            'age' => 'nullable|integer',
            'techID' => 'required|exists:laravel_technologies,techID',
        ]);

        if ($validator->fails()) {
            return redirect()->route('laravel-forms.create')
                ->withErrors($validator)
                ->withInput();
        }

        $form = new LaravelForm();
        $form->name = $request->input('name');
        $form->mailaddres = $request->input('mailaddres');
        $form->age = $request->input('age');
        $form->techID = $request->input('techID');
        $form->save();

        return redirect()->route('laravel-forms.index')->with('success', '登録が完了しました！');
    }

    public function laravelform($id)
    {
        $form = LaravelForm::with('technology')->findOrFail($id);
        return view('laravel-forms.laravelform', compact('form'));
    }

    public function edit($id)
    {
        $form = LaravelForm::findOrFail($id);
        $technologies = LaravelTechnology::all();
        return view('laravel-forms.edit', compact('form', 'technologies'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mailaddres' => 'required|email|max:255',
            'age' => 'nullable|integer',
            'techID' => 'required|exists:laravel_technologies,techID',
        ]);

        if ($validator->fails()) {
            return redirect()->route('laravel-forms.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $form = LaravelForm::findOrFail($id);
        $form->name = $request->input('name');
        $form->mailaddres = $request->input('mailaddres');
        $form->age = $request->input('age');
        $form->techID = $request->input('techID');
        $form->save();

        return redirect()->route('laravel-forms.laravelform', $id)->with('success', '更新が完了しました！');
    }

    public function destroy($id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->delete(); // SoftDeletesトレイトを使用しているので論理削除になります

        return redirect()->route('laravel-forms.index')->with('success', '削除が完了しました！');
    }
}