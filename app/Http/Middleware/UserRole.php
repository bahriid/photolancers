<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && auth()->user()->status != 'active') {

            if (auth()->user()->status == 'rejected') {
                $message = 'Your account is rejected. Please contact the support center.';
            } else {
                $message = 'Your account is not yet approved. Please contact the support center.';
            }
            Auth::logout();
            return redirect()->route('login')->with('error', $message);
        }

        return $next($request);
    }
}
