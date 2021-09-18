<?php

namespace Defser\ZilliqaLaravel;

use Illuminate\Support\ServiceProvider;

class ZilliqaLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/zilliqa.php' => config_path('zilliqa.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__.'/../config/zilliqa.php', 'zilliqa'
        );

        $this->app->bind('zilliqa.laravel', function ($app) {
            $config = $app['config']['zilliqa'];
            $connection = $config['default'];

            return new ZilliqaLaravel(
                $config['connections'][$connection]
            );
        });
    }

    public function register()
    {
        //
    }
}