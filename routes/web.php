<?php

Route::get('/baotran123', function () {
    return "Nguyen Ngoc Bao Tran";
});
Route::get('/kapee2812', function () {
    return "Dang Thi Kim Phuong";
});

Route::get('/buithanhhuy', function () {
    return "Bui Thanh Huy";
});
Route::get('/doanquochuy', function () {
    return 'Đoan Quoc Huy';
});

use Illuminate\Support\Facades\DB;

// Câu 7.2: Top 10 phim điểm cao nhất
Route::get('/top-movies', function () {
    $movies = DB::table('movie')
                ->orderBy('vote_average', 'desc')
                ->limit(10)
                ->get();
    return view('top_movies', ['movies' => $movies]);
});
