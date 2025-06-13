<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProtectPrimaryAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $routeParam = $request->route('id') ?? $request->route('user'); // 'user' if model binding is used
        $userId = is_object($routeParam) ? $routeParam->id : $routeParam;

        if ($userId == 1 && auth()->user()->id !== 1) {
            return redirect()->route('users.all')->with('error', "You can't modify the primary admin.");
        }

        return $next($request);
    }
}


