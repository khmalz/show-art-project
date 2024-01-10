<?php

namespace App\Http\Middleware;

use App\Models\RegisterActive;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $regisActive = RegisterActive::first()->active;

        if (!$regisActive) {
            return to_route('login');
        }

        return $next($request);
    }
}
