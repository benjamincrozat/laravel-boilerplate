<?php

namespace App\Http\Middleware;

class Authenticate extends \Illuminate\Auth\Middleware\Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        return route('login');
    }
}
