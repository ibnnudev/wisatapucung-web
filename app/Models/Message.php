<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'section_title',
        'section_subtitle',
        'section_image',
        'section_review_rating',
        'section_review_text',
        'section_review_author',
        'section_review_author_image',
        'section_review_author_position',
        'messages', // JSON {'name', 'phone', 'message'}
    ];

    protected $casts = [
        'messages' => 'array',
    ];
}
