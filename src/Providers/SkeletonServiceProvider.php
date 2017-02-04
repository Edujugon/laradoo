<?php

namespace Edujugon\Skeleton\Providers;

use Edujugon\Skeleton\Skeleton;
use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = function_exists('config_path') ? config_path('skeleton.php') : 'skeleton.php';

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
        $this->app['skeleton'] = $this->app->share(function($app)
        {
            return new Skeleton;
        });
    }
}
