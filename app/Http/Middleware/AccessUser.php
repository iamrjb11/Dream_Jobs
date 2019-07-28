<?php

namespace App\Http\Middleware;

use Closure;

class AccessUser
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
        if(Auth::user()->hasAnyRoles(['user'])){
            return $next($request);
        }
        else{
            return redirect('home');
            //abort(403, 'Unauthorized action.');
        }
    }
}
