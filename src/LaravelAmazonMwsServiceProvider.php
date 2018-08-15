<?php

namespace LaravelAmazonMws\LaravelAmazonMws;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class LaravelAmazonMwsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravelamazonmws');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelamazonmws');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/laravelamazonmws.php' => config_path('laravelamazonmws.php'),
            ], 'laravelamazonmws.config');
            //$this->app->register(ArrayToXml::class);
           // AliasLoader::getInstance(['ArrayToXml' => '\Spatie\ArrayToXml\ArrayToXml']);
           //$loader->alias('ArrayToXml', '\Spatie\ArrayToXml\ArrayToXml');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravelamazonmws'),
            ], 'laravelamazonmws.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravelamazonmws'),
            ], 'laravelamazonmws.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravelamazonmws'),
            ], 'laravelamazonmws.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelamazonmws.php', 'laravelamazonmws');

        // Register the service the package provides.
        $this->app->singleton('laravelamazonmws', function ($app) {
            return new LaravelAmazonMws;
        });
        /*
        $this->app->singleton('ArrayToXml', function($app)
        {
            return new ArrayToXml;
        });
        */
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelamazonmws'];
    }
}
