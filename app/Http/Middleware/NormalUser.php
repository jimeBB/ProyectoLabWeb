<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class NormalUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $role = $user->role;

        if (Auth::check() && $role == 'user') {
            return abort(403);
            //return redirect('welcome');
        }

        return $next($request);
    }
}
