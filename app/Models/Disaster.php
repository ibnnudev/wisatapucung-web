<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    protected $table    = 'disasters';
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
