<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potential extends Model
{
    protected $table = 'potentials';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
