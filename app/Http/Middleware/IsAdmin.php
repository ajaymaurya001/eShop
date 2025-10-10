<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        }

        // If the user is not an admin, log them out and redirect to the login page
        Auth::logout(); // Log out the user if they somehow slipped through

        return redirect()->route('show.login.form')->withErrors([
            'email' => 'Access denied! Only administrators can view this page.',
        ]);
    }
}
