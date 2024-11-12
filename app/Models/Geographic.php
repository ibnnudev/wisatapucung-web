<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geographic extends Model
{
    protected $table    = 'geographics';
    protected $fillable = [
        // section 1
        'section1_title',
        'section1_hero_image',

        // section 2
        'section2_title',

        // section 3
        'section3_title',
        'section3_description',
        'section3_image1',
        'section3_image2',

        // section 4
        'section4_title',
        'section4_description',
    ];
}
