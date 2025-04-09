<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    public function form()
    {
        return $this->hasMany(Form::class);
    }
}
