<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaravelTechnology extends Model
{
    use HasFactory;

    protected $table = 'technologies';
    protected $primaryKey = 'techID';
}