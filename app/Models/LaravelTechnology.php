<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    use HasFactory;

    protected $table = 'laravel_technologies';
    protected $primaryKey = 'technology_id';
    
    protected $fillable = [
        'language_name'
    ];

    /**
     * この技術に関連するフォームを取得
     */
    public function forms()
    {
        return $this->hasMany(LaravelForm::class, 'technology_id', 'technology_id');
    }
}