<?php

namespace App\Services;

use App\Models\LaravelForm;
use Illuminate\Support\Facades\Validator;

class FormService
{
    public function getAllForms()
    {
        // すべてのフォームデータを取得
        return LaravelForm::all();
    }

    public function createForm($data)
    {
        // バリデーションルール
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:100',
            'email' => 'required|email',
            'origin' => 'required|string|max:255',
            'language' => 'required|string|max:255',
        ]);

        // バリデーションエラーの場合
        if ($validator->fails()) {
            return $validator->errors();
        }

        // フォームデータを保存
        $form = LaravelForm::create([
            'name' => $data['name'],
            'age' => $data['age'],
            'email' => $data['email'],
            'origin' => $data['origin'],
            'language' => $data['language'],
        ]);

        return $form; // 成功した場合、保存したフォームデータを返す
    }
}
