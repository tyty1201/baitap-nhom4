<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    // Function lấy thông tin thể loại
    public function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai", compact("the_loai_sach"));
    }
    
    // Function lấy thông tin sách theo nhà xuất bản
    public function laythongtinsach()
    {
        $sach = Book::where("nha_xuat_ban", "Văn Học")->get();
        return view("qlsach.thong_tin_sach", compact("sach"));        
    }
    
    // Function chính: sách kinh điển
    public function sachKinhDien()
    {
        // Có thể gọi một trong hai function trên
        return $this->laythongtinsach();
        
        // Hoặc nếu muốn gọi cả hai:
        // $the_loai = $this->laythongtintheloai();
        // $sach = $this->laythongtinsach();
        // return view("qlsach.sach_kinh_dien", compact("the_loai", "sach"));
    }
}