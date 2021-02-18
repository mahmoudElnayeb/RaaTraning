<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class adminMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $guard=null)
    {

        if(Auth::guard($guard)->check()){
                     return redirect('admin/user');
        }
        // else{
        //     return redirect('/welome');
        // }
        return $next($request);
    }
}
