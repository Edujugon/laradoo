<?php

namespace Edujugon\Laradoo\Providers;

use Edujugon\Laradoo\Odoo;
use Illuminate\Support\ServiceProvider;

class OdooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = function_exists('config_path') ? config_path('laradoo.php') : 'laradoo.php';

        $this->publishes([
            __DIR__.'/../Config/config.php' => $config_path,
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Odoo::class, function ($app) {
            return new Odoo();
        });
    }
}
