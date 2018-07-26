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
        // https://carbon.nesbot.com/docs/#api-localization
        Carbon::setLocale(config('app.locale'));

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
    public function register()
    {
        if (! $this->app->environment('production')) {
            $this->app->register(\Clockwork\Support\Laravel\ClockworkServiceProvider::class);
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
