<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attraction::create([
            'title'       => 'Nikmati Berbagai Atraksi Wisata di Kalipucung',
            'description' => 'Kami mengemban misi untuk memperkenalkan keindahan alam Kalipucung kepada masyarakat luas. Dengan berbagai atraksi wisata yang kami tawarkan, kami yakin Anda akan merasa puas. Berikut adalah beberapa atraksi wisata yang kami tawarkan.'
        ]);
    }
}
