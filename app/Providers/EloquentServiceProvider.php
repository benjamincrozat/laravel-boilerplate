<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class EloquentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // https://laravel.com/docs/eloquent-relationships#polymorphic-relations
        Relation::morphMap([
            User::class,
        ]);
    }
}
