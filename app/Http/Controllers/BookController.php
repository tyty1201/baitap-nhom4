<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function sachKinhDien()
    {
       function laythongtintheloai()
       {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
        }
        function laythongtinsach()
        {
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));        
        }
}
}