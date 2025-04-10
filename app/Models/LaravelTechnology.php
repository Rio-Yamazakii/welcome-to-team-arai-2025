<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    protected $table = 'laravel_technologies'; // テーブル名
    public $timestamps = false; // タイムスタンプがなければ追加

    // リレーションなど必要ならここに書く（省略可）
}
