<?php

namespace App\Http\Middleware;

use Closure;

class ActiveUser
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->blocked_at) {
            $user = auth()->user();
            auth()->logout();
            return redirect()->route('login')
                ->withError('Your account was blocked at ' . $user->blocked_at);
        }

        return $next($request);
    }
}
