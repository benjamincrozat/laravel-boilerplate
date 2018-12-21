<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Laravel\Horizon\Horizon;
use Illuminate\Support\ServiceProvider;

class HorizonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    function boot()
    {
        // https://laravel.com/docs/horizon#installation
        Horizon::auth(function (Request $request) {
            return $request->user() && 1 === $request->user()->id;
        });
    }
}
