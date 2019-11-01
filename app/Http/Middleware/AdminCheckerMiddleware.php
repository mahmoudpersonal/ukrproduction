<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheckerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->admin == 1)
            return $next($request);
        else {
            if (!$request->isJson()) {
                Auth::logout();
                return redirect()->route('login');
            } else {
                return response()->json(['message' => 'not authorized'], 401);
            }

        }
    }
}
