<?php
use App\Http\Controllers\GenreController;

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/baotran123', function () {
    return "Nguyen Ngoc Bao Tran";
});
