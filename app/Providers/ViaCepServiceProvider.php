<?php

namespace App\Providers;

use App\Http\Services\CepService;
use Illuminate\Support\ServiceProvider;

class ViaCepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CepService::class, fn() => new CepService());
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
