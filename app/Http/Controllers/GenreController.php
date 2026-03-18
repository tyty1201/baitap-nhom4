<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index()
    {
        $genres = DB::table('genre')->get();
        return view('genres.index', compact('genres'));
    }
}
