<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    protected $table = 'accomodations';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
