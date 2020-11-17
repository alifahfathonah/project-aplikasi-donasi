<?php

namespace App\Http\Middleware;

use Closure;

class RoleAdmin
{
    public function handle($request, Closure $next)
    {
        $role_status = session('data_login');
        if (!$role_status) {
            return redirect()->route('login-admin');
        }
        return $next($request);
    }
}
