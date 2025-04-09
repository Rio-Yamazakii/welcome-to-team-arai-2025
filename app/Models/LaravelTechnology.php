<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    use HasFactory;

    

    // テーブル名の指定
    protected $table = 'laravel_technologies';

    protected $primaryKey = 'tech_ID';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['well_known_language'];

    // 複数代入可能なカラム
    // protected $fillable = ['tech_language'];

    public function forms()
{
    return $this->hasMany(LaravelForm::class, 'tech_ID');
}

}

