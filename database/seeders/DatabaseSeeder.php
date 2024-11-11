<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            HomeSeeder::class,
            AboutSeeder::class,
        ]);
    }
}
