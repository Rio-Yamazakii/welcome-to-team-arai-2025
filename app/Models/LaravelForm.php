<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelForm extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'laravel_forms';
    protected $primaryKey = 'form_id';
    protected $fillable = [
        'name', 
        'mail_address', 
        'age',
        'skill_id',
        'birthplace'
    ];

    //関連する技術を取得
    public function technology()
    {
        return $this->belongsTo(LaravelTechnology::class, 'skill_id','id');
    }
}
