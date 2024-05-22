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
    public function boot(): void
    {
     $this->app->bind(ProcessTransactionInterface::class, ProcessTransactionRepository::class);
    }
}
