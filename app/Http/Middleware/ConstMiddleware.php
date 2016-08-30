<?php

namespace App\Http\Middleware;

use Closure;

class ConstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {	define('COMPANY_TYPE','1');
	    define('SCHOOL_TYPE','2');
	    define('SOCIETY_TYPE','3');
        return $next($request);
    }
}
