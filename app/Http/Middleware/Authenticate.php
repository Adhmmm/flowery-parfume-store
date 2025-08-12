<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        if (! $request->expectsJson()) {
            // Redirect to the login page based on the user's role
            if ($request->is('login/admin') || $request->is('login/customer')) {
                return route('login.admin');
            }

            return route('login.admin');
        }
    }
}
