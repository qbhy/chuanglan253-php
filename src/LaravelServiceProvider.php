<?php


namespace Qbhy\CL253;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class LaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->setupConfig();

        $this->app->singleton(CL253::class, function () {
            $config = config('253');
            return new CL253($config);
        });
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $configSource = dirname(__DIR__) . '/config/253.php';
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $configSource => config_path('253.php')
            ]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('253');
        }
        $this->mergeConfigFrom($configSource, '253');

    }
}