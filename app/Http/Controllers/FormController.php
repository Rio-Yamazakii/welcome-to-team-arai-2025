<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelForm;
use App\Models\LaravelTechnology;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $forms = LaravelForm::all();
        $firstForm = LaravelForm::first();
        $technologies = LaravelTechnology::all();
        $formWithTech = DB::table('laravel_forms')
            ->join('laravel_technologies', 'laravel_forms.techID', '=', 'laravel_technologies.techID')
            ->select('laravel_forms.name', 'laravel_forms.age', 'laravel_technologies.lang')
            ->get();

        return view('index', compact('firstForm', 'technologies', 'forms','formWithTech'));
    }
    public function create()
    {
        $technologies = LaravelTechnology::all();
        return view('create', compact('technologies'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mailaddres' => 'required|email',
            'age' => 'required|integer',
            'techID' => 'required|exists:laravel_technologies,techID',
        ]);

        $form = new LaravelForm();
        $form->name = $validated['name'];
        $form->mailaddres = $validated['mailaddres'];
        $form->age = $validated['age'];
        $form->techID = $validated['techID'];
        $form->save();

        return redirect()->route('index')->with('success', 'フォームが正常に登録されました');

    }
    public function edit($id)
    {
        $form = LaravelForm::findOrFail($id);
        $technologies = LaravelTechnology::all();
        return view('edit', compact('form', 'technologies'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mailaddres' => 'required|email',
            'age' => 'required|integer',
            'techID' => 'required|exists:laravel_technologies,techID',
        ]);

        $form = LaravelForm::findOrFail($id);
        $form->name = $validated['name'];
        $form->mailaddres = $validated['mailaddres'];
        $form->age = $validated['age'];
        $form->techID = $validated['techID'];
        $form->save();

        return redirect()->route('create')->with('success', 'フォームが更新されました');
    }
    public function destroy($id)
    {
        $form = LaravelForm::findOrFail($id);
        $form->delete();

        return redirect()->route('create')->with('success', 'フォームが削除されました');
    }
}
