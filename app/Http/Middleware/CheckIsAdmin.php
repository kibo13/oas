<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $user = Auth::user()->roles->pluck('name');
        // dd($user);

        if (!$user->contains('Админ')) {
            // session()->flash('warning', 'У вас нет прав администратора');
            return redirect()->route('home');
        }

        return $next($request);
    }
}
