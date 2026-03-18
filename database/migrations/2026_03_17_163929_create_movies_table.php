<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');              // Tên phim
            $table->date('release_date');               // Ngày phát hành
            $table->text('overview');                   // Mô tả
            $table->string('image_link')->nullable();   // Ảnh đại diện (có thể null)
            $table->unsignedBigInteger('genre_id');     // Khóa ngoại đến bảng genres
            $table->timestamps();                        // created_at, updated_at
            
            // Tạo khóa ngoại
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}