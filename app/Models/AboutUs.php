<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        // section 1
        'section1_title',
        'section1_description',
        'section1_image',
        'section1_key_bussiness', // JSON: {"icon", "title", "description"}

        // section 2
        'section2_title',
        'section2_description',
        'section2_potentials', // JSON: {"image", "title", "description"}
    ];

    protected $casts = [
        'section1_key_bussiness' => 'array',
        'section2_potentials' => 'array',
    ];
}
