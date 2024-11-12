<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListAttraction extends Model
{
    protected $table = 'list_attractions';
    protected $fillable = [
        'title',
        'image',
        'description',
        'items',
    ];
}
