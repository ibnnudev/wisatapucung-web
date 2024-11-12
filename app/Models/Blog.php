<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'thumbnail', // max: 1mb
        'keyword', // max: 10
        'tag',
        'content',
        'status',
        'creator'
    ];
}
