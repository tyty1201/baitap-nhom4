<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Gọi các seeder theo thứ tự
        $this->call([
            GenreSeeder::class,
            MovieSeeder::class,
        ]);
    }
}