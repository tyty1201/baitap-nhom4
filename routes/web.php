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

