<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController; // Thêm dòng này

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route của Bùi Thành Huy
Route::get('/buithanhhuy', function () {
    return 'Bùi Thành Huy';
});

// THÊM ROUTE CHO YÊU CẦU 7.6 - HIỂN THỊ PHIM HÀNH ĐỘNG
Route::get('/action-movies', [MovieController::class, 'actionMovies'])->name('action.movies');

// Nếu anh muốn dùng tên route khác, ví dụ: /phim-hanh-dong
// Route::get('/phim-hanh-dong', [MovieController::class, 'actionMovies'])->name('action.movies');