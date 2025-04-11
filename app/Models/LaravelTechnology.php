<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    protected $table = 'laravel_technologies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'well_language'
    ];

    //この技術に関連するフォームを取得
    public function forms()
    {
        return $this->hasMany(LaravelForm::class, 'skill_id','id');
    }
}
