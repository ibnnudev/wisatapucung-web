<?php

namespace Database\Seeders;

use App\Models\Accomodation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accomodation::create([
            'title' => 'Rasakan Pengalaman Menginap di Desa Wisata',
            'description' => 'Desa Wisata adalah tempat yang tepat untuk Anda yang ingin merasakan pengalaman menginap di desa. Desa Wisata memiliki berbagai macam fasilitas yang dapat Anda nikmati, mulai dari penginapan yang nyaman hingga berbagai macam kegiatan menarik yang dapat Anda ikuti. Desa Wisata juga memiliki berbagai macam kuliner khas daerah yang dapat Anda coba. Jadi tunggu apalagi, segera kunjungi Desa Wisata dan rasakan pengalaman menginap di desa yang berbeda dari biasanya.',
            'image' => 'accomodation-1.jpg'
        ]);
    }
}
