<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    use HasFactory;

    // テーブル名の指定
    protected $table = 'laravel_technologies';

    // 複数代入可能なカラム
    protected $fillable = ['tech_language'];

}
