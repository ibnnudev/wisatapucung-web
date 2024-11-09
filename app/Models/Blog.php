<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'detail_image',
        'keyword',
        'tag',
        'created_at',
        'content',
        'status',
        'creator'
    ];
}
