<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bussiness extends Model
{
    protected $table = 'bussinesses';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
