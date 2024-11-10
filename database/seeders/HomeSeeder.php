<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::create([

            // section 1
            'section1_title'       => 'Wisata Edukasi Kalipucung',
            'section1_description' => 'Selamat datang di website resmi Wisata Edukasi Kalipucung. Kami menyediakan berbagai informasi tentang wisata edukasi, berita, kesenian, dan penginapan.',
            'section1_image'       => 'https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg',

            // section 2
            'section2_slogan' => 'Jelajahi Wisata Edukasi Kalipucung',
            'section2_title'  => 'Bangun Pengalaman yang Tak Terlupakan',
            'section2_image'  => 'https://cdn.pixabay.com/photo/2022/06/23/09/58/the-season-of-ripe-rice-7279448_1280.jpg',
            'section2_items'  => json_encode([
                [
                    'title'       => 'Atraksi Kesenian',
                    'description' => 'Kami menyediakan berbagai atraksi kesenian yang akan memukau hati anda.',
                    'image'       => null
                ],
                [
                    'title'       => 'Penginapan',
                    'description' => 'Berbagai penginapan yang nyaman dan aman untuk anda dan keluarga.',
                    'image'       => null
                ],
                [
                    'title'       => 'Paket Wisata',
                    'description' => 'Jelajahi berbagai lokasi indah di Kalipucung dengan paket wisata yang kami sediakan.',
                    'image'       => null
                ],
            ]),

            // section 3
            'section3_title'       => 'Atraksi Kesenian Daerah',
            'section3_description' => 'Wisata Kali Pucung memiliki berbagai kesenian yang akan memukau hati anda. Mulai dari tari tradisional, musik tradisional, dan berbagai kesenian lainnya.',
            'section3_image'       => 'Wisata Kali Pucung memiliki berbagai kesenian yang akan memukau hati anda. Mulai dari tari tradisional, musik tradisional, dan berbagai kesenian lainnya.',
            'section3_rate'        => '100%',
            'section3_rate_text'   => 'Kepuasan Pengunjung Indeks',

            // section 4
            'section4_title'                     => 'Dukung Wisata Edukasi Kalipucung',
            'section4_description'               => 'Kami akan terus berusaha memberikan yang terbaik untuk anda. Dukung kami dengan membagikan pengalaman mu di media sosial.',
            'section4_image'                     => 'https://cdn.pixabay.com/photo/2014/07/08/10/47/team-386673_640.jpg',
            'section4_rate'                      => '100%',
            'section4_rate_text'                 => 'Keuntungan untuk Dusun dan SDM',
            'section4_social_media_button_title' => 'Bagikan Pengalamanmu',
            'section4_social_media'              => 'https://www.facebook.com',

            // section 5
            'section5_title'       => 'Komitmen Kami untuk Masyarakat',
            'section5_description' => 'Kami berkomitmen untuk memberikan yang terbaik untuk masyarakat sekitar. Dengan berbagai program yang kami sediakan, kami berharap dapat membantu masyarakat sekitar.',
            'section5_image'       => 'https://cdn.pixabay.com/photo/2020/08/27/09/09/village-5521554_1280.jpg',
            'section5_rate'        => '2.938',
            'section5_rate_text'   => 'Jumlah Pengunjung Tahun Ini',

            // section 6
            'section6_welcome_message'           => 'Selamat datang di Kalipucung!. Nikmati pengalaman belajar yang seru sambil mengenal keindahan alam di sini. Selamat menjelajahi pengalaman terbaik!',
            'section6_name'                      => 'Agus Wisaksono',
            'section6_position'                  => 'Kepala Dusun Kalipucung',
            'section6_image'                     => 'Selamat datang di Kalipucung!. Nikmati pengalaman belajar yang seru sambil mengenal keindahan alam di sini. Selamat menjelajahi pengalaman terbaik!',
            'section6_pretext'                   => 'Like dan ikuti media sosial kami!',
            'section6_social_media_button_title' => 'Kunjungi Media Sosial Kami',
            'section6_social_media'              => 'https://www.instagram.com',


            // section 7
            'section7_title' => '"Angka menunjukkan kerja keras kami selama 6 tahun terakhir"',
            'section7_items' => json_encode([
                [
                    'number' => '1000',
                    'title'  => 'Pengunjung',
                    'icon'   => ''
                ],
                [
                    'number' => '100',
                    'title'  => 'Penginapan',
                    'icon'   => ''
                ],
                [
                    'number' => '10',
                    'title'  => 'Paket Wisata',
                    'icon'   => ''
                ],
            ]),
        ]);
    }
}
