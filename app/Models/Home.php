<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable = [
        // section 1
        'section1_title',
        'section1_description',
        'section1_image',

        // section 2
        'section2_slogan',
        'section2_title',
        'section2_image',
        'section2_items', // JSON [{title: '', description: '', image: ''}]

        // section 3
        'section3_title',
        'section3_description',
        'section3_image',
        'section3_rate',
        'section3_rate_text',

        // section 4
        'section4_title',
        'section4_description',
        'section4_image',
        'section4_rate',
        'section4_rate_text',
        'section4_social_media_button_title',
        'section4_social_media', // :link

        // section 5
        'section5_title',
        'section5_description',
        'section5_image',
        'section5_rate',
        'section5_rate_text',

        // section 6
        'section6_welcome_message',
        'section6_name',
        'section6_position',
        'section6_image',
        'section6_pretext',
        'section6_social_media_button_title',
        'section6_social_media', // :link

        // section 7
        'section7_title',
        'section7_items', // JSON [{number: '', title: '', icon: ''}]
    ];

    public $timestamps = false;


    // cast JSON fields
    protected $casts = [
        'section2_items' => 'array',
        'section6_items' => 'array',
    ];

    public function getAll()
    {
        return $this->all();
    }

    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }
}
