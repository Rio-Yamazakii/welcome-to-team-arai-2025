<?php

namespace App\Http\Controllers;

use App\Models\LaravelTechnology; 
use Illuminate\Http\Request;
use App\Models\LaravelForm;
use Illuminate\Support\Facades\DB;

class LaravelFormController extends Controller
{
    protected $laravelForm;
    public function __construct(LaravelForm $laravelForm)
    {
        $this->laravelForm = $laravelForm;
    }

    public function form_tech_list()
    {
        $firstRecord = LaravelForm::first(); // 最初のレコード取得
        
        // 技術リストを取得
        $technologies = LaravelTechnology::all(); // 技術モデルがある場合、テクノロジーリストを取得
        $userSkills = $this->laravelForm
        ->query()
        ->join('laravel_technologies','laravel_forms.tech_id','=','laravel_technologies.tech_id')
        ->select('laravel_forms.form_id', 'laravel_forms.name', 'laravel_forms.age', 'laravel_forms.email', 'laravel_technologies.language')
        ->get()
        ->all(); 
       
        return view('create_form', compact('technologies','firstRecord','userSkills'));
    }
    
        // 登録フォーム表示
        public function create()
        {
            $technologies = LaravelTechnology::all();
            return view('create_form', compact('technologies'));
        }
    
        // 登録処理
        public function store(Request $request)
        {
            $request->validate([
                'name'  => 'required',
                'email' => 'required|email',
                'age'   => 'nullable|integer',
                'tech_id' => 'nullable|exists:laravel_technologies,tech_id',
            ]);
    
            LaravelForm::create($request->all());
    
            return redirect()->route('forms.index')->with('success', '登録が完了しました！');
        }
    
        // 編集フォーム表示
        public function edit($form_id)
        {
            $form = LaravelForm::findOrFail($form_id);
            $technologies = LaravelTechnology::all();
            return view('edit_form', compact('form', 'technologies'));
        }
    
        // 更新処理
        public function update(Request $request, $form_id)
        {
            $request->validate([
                'name'  => 'required',
                'email' => 'required|email',
                'age'   => 'nullable|integer',
                'tech_id' => 'nullable|exists:laravel_technologies,tech_id',
            ]);
    
            $form = LaravelForm::findOrFail($form_id);
            $form->update($request->all());
    
            return redirect()->route('forms.index')->with('success', '更新が完了しました！');
        }
    
        // 論理削除
        public function destroy($form_id)
        {
            $form = LaravelForm::findOrFail($form_id);
            $form->delete(); // SoftDeletes を使っている場合は論理削除
    
            return redirect()->route('forms.index')->with('success', '削除しました（論理削除）');
        }

        public function index()
        {
            // laravel_forms テーブルのすべてのデータを取得（論理削除されていないもの）
            $forms = LaravelForm::whereNull('deleted_at')->get();
    
            // JSON 形式でレスポンスを返す
            return response()->json($forms);
        }

        
    }

