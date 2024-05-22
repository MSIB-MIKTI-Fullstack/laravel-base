<?php

namespace App\Providers;

use App\Interfaces\ProcessTransactionInterface;
use App\Repository\ProcessTransactionRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $nama_global = "Aloy";

        View::share('nama_global', $nama_global);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(ProcessTransactionInterface::class, ProcessTransactionRepository::class);
    }
}
