<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/quynhthi', function () {
    return 'Dao Quynh Thi';
});

Route::get('/top-budget-movies', [MovieController::class, 'getTopBudget']);