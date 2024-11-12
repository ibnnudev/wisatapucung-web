<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Kami Berdedikasi Untuk Memberikan Produk Terbaik',
            'description' => 'Selama hampir 10 tahun, kami telah berhasil membuat produk yang berkualitas dan terbaik untuk dusun Kalipucung. Seluruh hasil dari produk tersebut akan digunakan untuk mengembangkan potensi dusun lainnya.'
        ]);
    }
}
