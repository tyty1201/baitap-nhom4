<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/quynhthi', function () {
    return 'Dao Quynh Thi';
});

Route::get('/top-budget-movies', [MovieController::class, 'getTopBudget']);

use App\Http\Controllers\GenreController;

// route của bạn
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/baotran123', function () {
    return "Nguyen Ngoc Bao Tran";
});

