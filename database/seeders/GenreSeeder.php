<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ (nếu có)
        DB::table('genres')->truncate();
        
        // Thêm dữ liệu thể loại phim
        $genres = [
            ['genre_name' => 'Action'],
            ['genre_name' => 'Adventure'],
            ['genre_name' => 'Comedy'],
            ['genre_name' => 'Drama'],
            ['genre_name' => 'Horror'],
            ['genre_name' => 'Sci-Fi'],
            ['genre_name' => 'Romance'],
            ['genre_name' => 'Thriller'],
            ['genre_name' => 'Animation'],
            ['genre_name' => 'Documentary'],
        ];
        
        foreach ($genres as $genre) {
            Genre::create($genre);
        }
        
        $this->command->info('Đã tạo ' . count($genres) . ' thể loại phim thành công!');
    }
}