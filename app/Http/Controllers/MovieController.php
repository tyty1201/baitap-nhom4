<?php

namespace App\Http\Controllers;

use App\Models\Movie; // Import Model Movie vào đây
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
}