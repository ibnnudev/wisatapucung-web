<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // section1
            'section1_title'      => 'Geography',
            'section1_hero_image' => 'geography.jpg',

            // section2
            'section2_title'      => 'Geography 2',
            // section3
            'section3_title'      => 'Geography',
            'section3_description' => 'The Philippines is an archipelago of 7,107 islands with a total land area, including inland bodies of water, of approximately 300,000 square kilometers (120,000 sq mi). Its 36,289 kilometers (22,549 mi) of coastline makes it the country with the 5th longest coastline in the world. The Philippine archipelago is divided into three island groups: Luzon, Visayas, and Mindanao. The Luzon islands include Luzon itself, Palawan, Mindoro, Marinduque, Masbate, Romblon, Catanduanes, Batanes, and Polillo. The Visayas is the group of islands in the central Philippines, the largest of which',
            'section3_image1'     => 'geography-1.jpg',
            'section3_image2'     => 'geography-2.jpg',

            // section4
            'section4_title'      => 'Geography',
            'section4_description' => 'The Philippines is an archipelago of 7,107 islands with a total land area, including inland bodies of water, of approximately 300,000 square kilometers (120,000 sq mi). Its 36,289 kilometers (22,549 mi) of coastline makes it the country with the 5th longest coastline in the world. The Philippine archipelago is divided into three island groups: Luzon, Visayas, and Mindanao. The Luzon islands include Luzon itself, Palawan, Mindoro, Marinduque, Masbate, Romblon, Catanduanes, Batanes, and Polillo. The Visayas is the group of islands in the central Philippines, the largest of which',

        ];

        \App\Models\Geographic::create($data);
    }
}
