<?php

// 1. Khai báo tất cả các thư viện lên đầu trang
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

// --- TRANG CHỦ ---
Route::get('/', function () {
    return view('welcome');
});

// --- CODE CỦA QUYNH THI ---
Route::get('/quynhthi', function () {
    return 'Dao Quynh Thi';
});
Route::get('/top-budget-movies', [MovieController::class, 'getTopBudget']);

// --- CODE TỪ MAIN ---
Route::get('/genres', [GenreController::class, 'index']);

// --- CODE CỦA TAN HIEN ---
Route::get('/TanHien', function () {
    return "NguyenTanHien";
}); // Đã thêm đóng ngoặc ở đây

// --- CODE CỦA KAPEE2812 ---
Route::get('/kapee2812', function () {
    return "Dang Thi Kim Phuong";
});

// --- CODE CỦA BÙI THÀNH HUY ---
Route::get('/buithanhhuy', function () {
    return 'Bùi Thành Huy';
});

// --- CÁC ROUTE VỀ MOVIE DB ---
Route::get('/phim-thoi-luong-lon', [MovieController::class, 'getLongMovies']);

// Câu 7.2: Top 10 phim điểm cao nhất
Route::get('/top-movies', function () {
    $movies = DB::table('movie')
                ->orderBy('vote_average', 'desc')
                ->limit(10)
                ->get();
    return view('top_movies', ['movies' => $movies]);
});

// Yêu cầu 7.6: Hiển thị phim hành động
Route::get('/action-movies', [MovieController::class, 'actionMovies'])->name('action.movies');

// Câu về phim Canada
Route::get('/canada-movie', function () {
    $movies = DB::table('movie')
        ->where('country_name', 'Canada')
        ->get();

    return view('canada_movie', compact('movies'));
}); // Đã thêm đóng ngoặc ở đây