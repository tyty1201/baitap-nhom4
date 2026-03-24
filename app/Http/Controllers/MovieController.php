<?php

namespace App\Http\Controllers;


use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function getLongMovies()
    {
        // Sử dụng Eloquent ORM: cực kỳ ngắn gọn
        $movies = Movie::where('runtime', '>', 120)
                       ->limit(10)
                       ->get();

        return view('movies_list', compact('movies'));
    }
    public function actionMovies()
    {
        // Lấy genre_id của thể loại Action
        $genre = Genre::where('genre_name', 'Action')->first();
        
        if (!$genre) {
            // Nếu không có genre Action, trả về collection rỗng
            $movies = collect([]);
        } else {
            // Lấy các phim thuộc thể loại Action
            $movies = Movie::where('genre_id', $genre->id)->get();
        }
        
        // Trả về view với dữ liệu movies
        return view('action-movies-table', compact('movies'));
    }
}