<?php

namespace App\Http\Middleware;

use Closure;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $permission
     * @return mixed
     */

    public function handle($request, Closure $next, $permission)
    {
        if (!auth()->user()->hasPermission($permission)) {
            // session()->flash('warning', 'У вас нет доступа к этой странице');
            abort(404);
        }

        return $next($request);
    }
}
