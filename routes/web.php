<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

// route của bạn
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/baotran123', function () {
    return "Nguyen Ngoc Bao Tran";
});