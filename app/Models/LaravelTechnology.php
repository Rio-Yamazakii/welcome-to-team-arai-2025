<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTechnology extends Model
{
    use HasFactory;

    protected $table = 'laravel_technologies';
    protected $primaryKey = 'techID';
    
    protected $fillable = [
        'lang'
    ];

    public function forms()
    {
        return $this->hasMany(LaravelForm::class, 'techID', 'techID');
    }
}