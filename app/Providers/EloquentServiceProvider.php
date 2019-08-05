<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class EloquentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Custom Polymorphic Types: https://laravel.com/docs/5.6/eloquent-relationships#polymorphic-relations
        Relation::morphMap([
            User::class,
        ]);
    }
}
