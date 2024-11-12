<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';
    protected $fillable = [
        // section 1
        'section1_tagline',
        'section1_title',
        'section1_description',
        'section1_image',
        'section1_button_text',
        'section1_button_url',

        // section 2
        'section2_title',
        'section2_description',
    ];
}
