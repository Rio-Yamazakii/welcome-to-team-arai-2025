<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'email', 'age', 'technologies_id'];
    public function technologies()
    {
        return $this->belongsTo(Technologies::class, 'technologies_id');
    }
}
