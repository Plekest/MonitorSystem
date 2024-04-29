<?php

namespace App\Providers;

use App\Repositories\SystemRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrar o repositório no container de injeção de dependência
        $this->app->bind(SystemRepository::class, function ($app) {
            return new SystemRepository($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
