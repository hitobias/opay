<?php

namespace Hitobias\Opay;

use Illuminate\Support\ServiceProvider;

class OpayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/opay.php' => config_path('opay.php'),
        ], 'opay_config');
    }

    public function register()
    {
        // load config
        $this->mergeConfigFrom(__DIR__ . '/../config/opay.php', 'opay');

        // Facade Custom class
        $this->app['opay'] = $this->app->share(function ($app) {
            return new Opay;
        });
    }
}
