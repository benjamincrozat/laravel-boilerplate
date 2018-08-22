<?php

namespace App\Providers;

use Laravel\Horizon\Horizon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    function boot()
    {
        // https://laravel.com/docs/5.6/horizon#installation
        Horizon::auth(function () {
            return Auth::check();
        });

        // https://laravel.com/docs/5.6/pagination#customizing-the-pagination-view
        Paginator::defaultSimpleView('pagination::simple-default');

        // Custom Polymorphic Types: https://laravel.com/docs/5.6/eloquent-relationships#polymorphic-relations
        Relation::morphMap([
            \App\User::class,
        ]);
    }

    /**
     * Register any application services.
     */
    function register()
    {
        if (! $this->app->environment('production')) {
            $this->app->register(\Clockwork\Support\Laravel\ClockworkServiceProvider::class);
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
