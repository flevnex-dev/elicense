<?php

namespace Flevnex\Elicense;

use Illuminate\Support\ServiceProvider;

class ElicenseServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the config file
        $this->mergeConfigFrom(
            __DIR__.'/config/elicense.php', 'elicense'
        );
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'elicense');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Publish config file
        $this->publishes([
            __DIR__.'/config/elicense.php' => config_path('elicense.php'),
        ], 'elicense-config');

        // Publish views
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/elicense'),
        ], 'elicense-views');
    }
}