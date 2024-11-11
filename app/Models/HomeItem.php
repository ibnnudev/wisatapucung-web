<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeItem extends Model
{
    protected $table = 'home_items';
    protected $fillable = [
        'section_number',
        'title',
        'image',
        'description',
    ];

    public $timestamps = false;
}
