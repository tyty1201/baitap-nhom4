<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Route;



class MovieController extends Controller
{
    public function getTopBudget()
    {
        // Lấy 10 bộ phim có budget cao nhất (sắp xếp giảm dần)
        $movie = DB::table('movie')
            ->select('movie_name','movie_name_vn', 'release_date', 'budget')
            ->orderBy('budget', 'desc')
            ->limit(10)
            ->get();

        return view('quynhthi.top_budget', ['movies' => $movie]);
    }
}
