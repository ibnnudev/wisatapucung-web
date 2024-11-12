<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demography extends Model
{
    protected $table    = 'demographies';
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
