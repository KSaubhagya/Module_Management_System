<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckHead
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->type === 'HEAD' || Auth::user()->type === 'ADMIN')) {
            return $next($request);
        }
        
        return redirect()->route('dashboard')->with('error', 'You do not have access to this page.');
    }
}