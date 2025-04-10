<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    use HasFactory;

    protected $table = 'laravel_technologies';
    protected $fillable = ['tech_language'];

}
