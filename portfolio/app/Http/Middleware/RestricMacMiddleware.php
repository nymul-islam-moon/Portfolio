<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class RestricMacMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $macAddrecess = ['0A-00-27-00-00-13'];

        $macAddr = explode(" ",exec('getmac'));



        if(!in_array($macAddr[0], $macAddrecess)){
            abort(403, 'You are restricted to access this area');
        }

        return $next($request);
    }
}
