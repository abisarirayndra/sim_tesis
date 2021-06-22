<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DosenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (!$user->isDosen()) {
           return redirect()->back();
        }

        return $next($request);
    }
}
