<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

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
        // Define o tamanho padrão para strings no banco de dados (MySQL).
        Schema::defaultStringLength(191);

        // Customização para usar a coluna `senha` na autenticação.
        Auth::provider('eloquent', function ($app, $config) {
            return new \Illuminate\Auth\EloquentUserProvider($app['hash'], $config['model']);
        });
    }
}
