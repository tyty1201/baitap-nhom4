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

use Illuminate\Support\Facades\DB;

Route::get('/canada-movie', function () {

    // B1: Lấy dữ liệu từ database
    $movies = DB::table('movie')
        ->where('country_name', 'Canada')
        ->get();

    // B2: Trả về view
    return view('canada_movie', compact('movies'));
});