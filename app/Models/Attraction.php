<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $table = 'attractions';
    protected $fillable = [
        // section 1
        'title',
        'description',
        'list_attraction', // JSON {'image', 'title', 'description', 'items': []}
    ];

    // cast JSON to array
    protected $casts = [
        'list_attraction' => 'array',
    ];
}
