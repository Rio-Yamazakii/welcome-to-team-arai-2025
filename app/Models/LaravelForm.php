<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaravelForm extends Model
{
 //use HasFactory;

    protected $fillable = ['name','email','age','tech_ID'];

    protected $table = 'laravel_forms';
    protected $primaryKey = 'form_id'; // 主キー指定
    public $timestamps = false;

}

