<?php

namespace Fused\Plaid\Providers;

use Plaid\Client;
use Illuminate\Support\ServiceProvider;

class PlaidServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('Plaid\Client', function ($app) {
            return new Client(
                config('plaid.client_id'),
                config('plaid.secret'),
                config('plaid.public_key'),
                config('plaid.environment')
            );
        });

        $this->publishes([
            __DIR__.'/../../config/plaid.php' => config_path('plaid.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Plaid\Client'];
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
