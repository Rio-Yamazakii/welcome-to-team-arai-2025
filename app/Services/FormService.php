<?php

namespace App\Services;

use App\Models\LaravelForm;

class FormService
{
    // すべてのフォームデータを取得
    public function getAllForms()
    {
        // Eagerロードでtechnology（技術名）も一緒に取得
        return LaravelForm::with('technology')->get();
    }
}
