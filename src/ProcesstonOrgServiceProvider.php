<?php

namespace Processton\ProcesstonOrg;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ProcesstonOrgServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerRoutes();
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('module-org.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'module-org');

        // Register the main class to use with the facade
        $this->app->singleton('processton-org', function () {
            return new ProcesstonOrg;
        });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('module-org.base_path'),
            'middleware' => [
                ...(config('processton-client.middleware') ? config('processton-client.middleware') : []),
                ...(config('module-org.middleware') ? config('module-org.middleware') : [])
            ],
        ];
    }
}
