<?php

namespace Masoud5070\ApiRoutes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ApiRoutesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Register route of package
        $this->registerRouts();

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Load and group route with configuration
     */
    protected function registerRouts()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });
    }

    /**
     *  Call config values for route group setting
     * @return array
     */
    protected function routeConfiguration()
    {
        return [
            'prefix' => config('api-routes.prefix'),
            'middleware' => config('api-routes.middleware'),
            'as' => ! empty(config('api-routes.groupNames')) ? config('api-routes.groupNames') . '.' : null,
        ];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/api-routes.php' => config_path('api-routes.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/api-routes.php', 'api-routes');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['api-routes'];
    }
}
