<?php

namespace Hitobias\Opay;

use Illuminate\Support\ServiceProvider;

class OpayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/opay.php' => config_path('opay.php'),
        ]);
    }

    public function register()
    {
          //Config
        $this->mergeConfigFrom(__DIR__ . '/../config/opay.php', 'opay');

        $this->app->singleton('opay', function() {
            return new Opay;
        });
    }

    public function providers()
    {
        return ['opay'];
    }
}
