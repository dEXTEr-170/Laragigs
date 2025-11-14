<?php

namespace App\Http\Middleware;

use Clockwork\Support\Doctrine\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    public function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
