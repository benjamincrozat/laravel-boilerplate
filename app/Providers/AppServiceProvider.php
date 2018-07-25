<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Carbon::setLocale(config('app.locale'));

        // Use a clean template for paginations instead of the Bootstrap 4 version.
        Paginator::defaultSimpleView('pagination::simple-default');

        // Polymorphic relationships shouldn't depend on our app's structure.
        // Now, instead of seeing `App\User` in the database,
        // we'll see a proper identifier like `users`.
        Relation::morphMap([
            \App\User::class,
        ]);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        if (! $this->app->environment('production')) {
            $this->app->register(\Clockwork\Support\Laravel\ClockworkServiceProvider::class);
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
