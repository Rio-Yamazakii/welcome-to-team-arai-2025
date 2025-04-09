<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function technologies()
    {
        return $this->belongsTo(Technologies::class, 'technologies_id');
    }
}
