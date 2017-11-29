<?php

namespace App\Http\Middleware;

use Closure;


class Admin
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
        if ($request->user()->tipoUser()) {
            return $next($request);
        }
        else
        {
            abort(401);
        }
        //dd($this->auth->user()->tipoUser());
        
    }
}
