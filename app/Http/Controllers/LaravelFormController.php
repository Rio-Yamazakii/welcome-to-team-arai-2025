<?php

namespace App\Http\Controllers;

use App\Models\LaravelTechnology; 
use Illuminate\Http\Request;
use App\Models\LaravelForm;
use Illuminate\Support\Facades\DB;

class LaravelFormController extends Controller
{
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
       
        return view('form_tech_list', compact('technologies','firstRecord','userSkills'));
    }
}
