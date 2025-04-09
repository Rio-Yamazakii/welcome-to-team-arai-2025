<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    use HasFactory;

    protected $fillable = ['language'];
    public function form()
    {
        return $this->hasMany(Form::class, 'technologies_id');
    }
}
