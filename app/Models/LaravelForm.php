<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelForm extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'laravel_forms';
    protected $primaryKey = 'formID';
    
    protected $fillable = [
        'name',
        'mailaddres',
        'age',
        'techID',
        'birthplace'
    ];

    public function technology()
    {
        return $this->belongsTo(LaravelTechnology::class, 'techID', 'techID');
    }
}