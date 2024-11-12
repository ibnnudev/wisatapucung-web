<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topography extends Model
{
    protected $table    = 'topographies';
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
