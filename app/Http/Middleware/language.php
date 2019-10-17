<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( session()->get('current_locale',null) == null ){
            session()->put('current_locale','en');
        }
        App::setLocale(session()->get('current_locale'));
        return $next($request);
    }
}
