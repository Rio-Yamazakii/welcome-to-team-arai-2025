<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelForm extends Model
{
 //use HasFactory;

    protected $fillable = ['name','email','age','tech_id'];

    protected $table = 'laravel_forms';
    protected $primaryKey = 'form_id'; // 主キー指定
    protected $dates = ['deleted_at'];

public function technology()
    {
        return $this->belongsTo(LaravelTechnology::class, 'tech_id', 'tech_id');
    }
}

