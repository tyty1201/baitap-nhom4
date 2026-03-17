<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ
        DB::table('movies')->truncate();
        
        // Lấy ID của thể loại Action
        $actionGenre = Genre::where('genre_name', 'Action')->first();
        $comedyGenre = Genre::where('genre_name', 'Comedy')->first();
        $sciFiGenre = Genre::where('genre_name', 'Sci-Fi')->first();
        $horrorGenre = Genre::where('genre_name', 'Horror')->first();
        
        // Thêm dữ liệu phim mẫu
        $movies = [
            [
                'movie_name' => 'Fast & Furious 9',
                'release_date' => '2021-05-19',
                'overview' => 'Dom Toretto và gia đình phải đối mặt với người em trai thất lạc của Dom, Jakob, một sát thủ đang hợp tác với kẻ thù cũ của họ. Cuộc chiến gia đình đầy kịch tính với những pha đua xe ngoạn mục.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/fast9.jpg',
                'genre_id' => $actionGenre->id
            ],
            [
                'movie_name' => 'John Wick 4',
                'release_date' => '2023-03-22',
                'overview' => 'John Wick khám phá con đường đánh bại High Table, nhưng trước khi có thể giành được tự do, anh phải đối đầu với kẻ thù mới có liên minh hùng mạnh trên khắp thế giới.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/johnwick4.jpg',
                'genre_id' => $actionGenre->id
            ],
            [
                'movie_name' => 'The Hangover',
                'release_date' => '2009-06-02',
                'overview' => 'Ba người bạn tỉnh dậy sau bữa tiệc độc thân ở Las Vegas mà không nhớ gì và phát hiện chú rể đã mất tích. Họ phải tìm lại chú rể trước đám cưới.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/hangover.jpg',
                'genre_id' => $comedyGenre->id
            ],
            [
                'movie_name' => 'Inception',
                'release_date' => '2010-07-16',
                'overview' => 'Một tên trộm tài ba chuyên đánh cắp bí mật từ tiềm thức của nạn nhân trong giấc mơ được giao nhiệm vụ cấy ghép ý tưởng vào tâm trí người khác.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/inception.jpg',
                'genre_id' => $sciFiGenre->id
            ],
            [
                'movie_name' => 'The Conjuring',
                'release_date' => '2013-07-19',
                'overview' => 'Cặp đôi điều tra siêu nhiên được mời đến giúp đỡ một gia đình đang bị quấy nhiễu bởi linh hồn ma quỷ trong trang trại của họ.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/conjuring.jpg',
                'genre_id' => $horrorGenre->id
            ],
            [
                'movie_name' => 'Avengers: Endgame',
                'release_date' => '2019-04-26',
                'overview' => 'Sau những sự kiện tàn khốc của Infinity War, các Avengers còn lại phải tập hợp lại để đảo ngược hành động của Thanos và khôi phục lại trật tự cho vũ trụ.',
                'image_link' => 'https://image.tmdb.org/t/p/w500/endgame.jpg',
                'genre_id' => $actionGenre->id
            ],
        ];
        
        foreach ($movies as $movie) {
            Movie::create($movie);
        }
        
        $this->command->info('Đã tạo ' . count($movies) . ' bộ phim thành công!');
    }
}