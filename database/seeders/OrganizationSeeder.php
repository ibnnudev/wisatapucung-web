<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::create([
            'section1_tagline' => '#OrganisasiDusunKalipucung',
            'section1_title' => 'Pemuda Dusun Kalipucung',
            'section1_description' => 'Mengembangkan potensi pemuda dusun kalipucung',
            'section1_image' => 'https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png',
            'section1_button_text' => 'Lihat Lebih Lanjut',
            'section1_button_url' => 'https://www.google.com',

            'section2_title' => 'Dibalik Suksesnya Dusun',
            'section2_description' => 'Kami adalah pemuda dusun kalipucung yang bergerak dalam bidang sosial dan keagamaan',

        ]);
    }
}
