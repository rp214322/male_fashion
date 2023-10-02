<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->type == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect()->intended('/')->with('info','You do not have rights to access this location');
            }
        }
        return redirect()->with('info','You do not have rights to access this location');
    }
}
