<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (! $this->app->environment('production')) {
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }

    public function boot()
    {
        // https://laravel.com/docs/pagination#customizing-the-pagination-view
        Paginator::defaultSimpleView('pagination::simple-default');
        Paginator::defaultView('pagination::default');
    }
}
