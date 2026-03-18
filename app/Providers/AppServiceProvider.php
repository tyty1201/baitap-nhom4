<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // THÊM DÒNG NÀY

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // THÊM DÒNG NÀY ĐỂ FIX LỖI KEY TOO LONG
        Schema::defaultStringLength(191);
    }
}