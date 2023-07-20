<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        $user = $request->user();
        // Mapping of bigint type to role strings
        if(auth()->user()->type == $userType){
            return $next($request);
        }
        /* return response()->view('errors.check-permission'); */
    
        abort(403, 'Unauthorized');
    }
}
