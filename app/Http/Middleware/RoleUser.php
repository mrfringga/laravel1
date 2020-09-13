<?php

namespace App\Http\Middleware;

use Closure;

class RoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role)
    {
        if(in_array($request->user()->role_id, $role)){
            return $next($request);
        }
        return redirect('/auth/login');
    }
}
