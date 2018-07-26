<?php

namespace App\Providers;

use Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
