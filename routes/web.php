<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

// Code của bạn (quynhthi)
Route::get('/quynhthi', function () {
    return 'Dao Quynh Thi';
=======
Route::get('/baotran123', function () {
    return "Nguyen Ngoc Bao Tran";
});
Route::get('/kapee2812', function () {
    return "Dang Thi Kim Phuong";

});
Route::get('/top-budget-movies', [MovieController::class, 'getTopBudget']);


// Code từ main
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
=======
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

