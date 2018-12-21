<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DuskServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    function register()
    {
        if (! $this->app->environment('production')) {
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
