<?php

namespace App\Providers;

use App\Interfaces\NotaInterface;
use App\Services\NotaService;
use Illuminate\Support\ServiceProvider;

class NotaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Se relaciona la interfaz con la implementación
        $this->app->bind(NotaInterface::class, NotaService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
