<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws AuthorizationException
     */

    public function handle($request, Closure $next, $permissionName)
    {
        if(Gate::denies($permissionName)) {
            throw new AuthorizationException();
        }
        return $next($request);
    }
}
