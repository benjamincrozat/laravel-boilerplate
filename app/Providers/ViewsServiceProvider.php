<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        // https://laravel.com/docs/pagination#customizing-the-pagination-view
        Paginator::defaultSimpleView('pagination::simple-default');
        Paginator::defaultView('pagination::default');
    }
}
