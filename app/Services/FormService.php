<?php

namespace App\Services;

use App\Models\LaravelForm;

class FormService
{
    // フォームデータを全て取得するメソッド
    public function getAllForms()
    {
        return LaravelForm::all();  // 全てのフォームデータを返す
    }

    // 任意のフォームデータを取得するメソッド（例：ID指定）
    public function getFormById($id)
    {
        return LaravelForm::find($id);  // ID指定でフォームデータを返す
    }
}
