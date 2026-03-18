<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

// Code của bạn (quynhthi)
Route::get('/quynhthi', function () {
    return 'Dao Quynh Thi';
});
Route::get('/top-budget-movies', [MovieController::class, 'getTopBudget']);

// Code từ main
Route::get('/genres', [GenreController::class, 'index']);

Route::get('/TanHien', function () {
    return "NguyenTanHien";
});

//Route của moviedb
use App\Http\Controllers\MovieController;

Route::get('/phim-thoi-luong-lon', [MovieController::class, 'getLongMovies']);


use Illuminate\Support\Facades\DB;

// Câu 7.2: Top 10 phim điểm cao nhất
Route::get('/top-movies', function () {
    $movies = DB::table('movie')
                ->orderBy('vote_average', 'desc')
                ->limit(10)
                ->get();
    return view('top_movies', ['movies' => $movies]);
});

