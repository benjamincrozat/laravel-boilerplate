<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DuskServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (class_exists($dusk = \Laravel\Dusk\DuskServiceProvider::class)) {
            $this->app->register($dusk);
        }
    }
}
