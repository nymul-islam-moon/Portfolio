<?php

namespace App\Http\Middleware;

use App\Models\ControllMacAddress;
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

        $macAddr = explode(" ",exec('getmac'));

        $count = ControllMacAddress::whereIn('mac_address', $macAddr)->count();

        if($count == 0){
            abort(403, 'You are restricted to access this area');
        }

        return $next($request);
    }
}
