<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelForm extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'laravel_forms';
    protected $primaryKey = 'form_id';
    
    protected $fillable = [
        'name',
        'email',
        'age',
        'technology_id',
        'birthplace'
    ];

    /**
     * 関連する技術を取得
     */
    public function technology()
    {
        return $this->belongsTo(LaravelTechnology::class, 'technology_id', 'technology_id');
    }
}