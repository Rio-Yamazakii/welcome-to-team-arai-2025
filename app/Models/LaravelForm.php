<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelForm extends Model
{
    use HasFactory;

    // テーブル名を指定
    protected $table = 'laravel_forms';

    protected $primaryKey = 'form_ID';

    // 複数代入可能な属性を指定
    protected $fillable = ['name', 'mail_address', 'age', 'tech_ID'];

    public function technology()
{
    return $this->belongsTo(LaravelTechnology::class, 'tech_ID');
}

}

