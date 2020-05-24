<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @return mixed
     */

    public function handle($request, Closure $next, $role)
    {
        if (!auth()->user()->hasRole($role)) {
            // session()->flash('warning', 'У вас нет доступа к этой странице');
            abort(404);
        }

        return $next($request);
    }
}
