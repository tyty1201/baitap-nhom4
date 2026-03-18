<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Khai báo tên bảng vì tên bảng trong SQL của bạn là 'movie'
    protected $table = 'movie'; 

    // Tắt timestamps nếu bảng của bạn không có cột created_at và updated_at
    public $timestamps = false;
}