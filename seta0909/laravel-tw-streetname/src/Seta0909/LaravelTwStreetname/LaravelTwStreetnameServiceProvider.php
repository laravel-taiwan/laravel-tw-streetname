<?php namespace Seta0909\LaravelTwStreetname;

use Illuminate\Support\ServiceProvider;

class LaravelTwStreetnameServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('seta0909/laravel-tw-streetname');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['TwStreet'] = $this->app->share(function ($app) {
            return new LaravelTwStreetname;
        });

        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('TwStreet', 'Seta0909\LaravelTwStreetname\Facades\LaravelTwStreetname');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('TwStreet');
    }

}
