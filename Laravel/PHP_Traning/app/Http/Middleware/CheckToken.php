<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    public function handle($request, Closure $next)
    {
        if ($request->path() !== "login"){
            if (!$request->token){
                return redirect('login');
            }
        }
        return $next($request);
    }
}
 