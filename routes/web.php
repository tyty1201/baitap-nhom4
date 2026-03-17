<?php

Route::get('/TanHien', function () {
    return "NguyenTanHien";
});
//Route của moviedb
use App\Http\Controllers\MovieController;

Route::get('/phim-thoi-luong-lon', [MovieController::class, 'getLongMovies']);