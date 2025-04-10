<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelForm extends Model
{
    use HasFactory;

    protected $table = 'laravel_forms';
    protected $fillable = ['name', 'email', 'age', 'tech_ID'];

    public function technology()
    {
        return $this->belongsTo(LaravelTechnology::class, 'tech_ID', 'id');
    }
}
