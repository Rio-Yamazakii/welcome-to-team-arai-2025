<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaravelForm extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'forms';
    protected $primaryKey = 'formID';
}
