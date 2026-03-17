<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuoiController extends Controller
{
     // Hiển thị form
    public function form()
    {
        return view('nhapnamsinh');
    }

    // Xử lý tính tuổi
    public function tinhtuoi(Request $request)
    {
        $namsinh = $request->input('namsinh');

        $namhientai = date("Y");

        $tuoi = $namhientai - $namsinh;

        return view('ketqua', compact('tuoi'));
    }
}
