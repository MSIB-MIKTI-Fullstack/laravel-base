<?php

namespace App\Providers;

use App\Interfaces\ProcessTransactionInterface;
use App\Repository\ProcessTransactionRepository;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void // method boot() artinya method ini akan dijalankan setelah semua service provider dijalankan
    {
        $this->app->bind(ProcessTransactionInterface::class, ProcessTransactionRepository::class);
        // bind adalah method yang digunakan untuk mengikat interface dengan class yang akan diimplementasikan
    }
}
