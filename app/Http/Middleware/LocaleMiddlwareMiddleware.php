<?php

namespace App\Http\Middleware;

use Closure;

class localeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next):Response
    {
        $langs=['en','ru','de'];
        $lang=$request->session()->get('lang');
        if (!in_array($lang,$langs)){
            app()->setLocale('en');
        }
        else{
            app()->setLocale($lang);
        }
        return $next($request);
    }
}
