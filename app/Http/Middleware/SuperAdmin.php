<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if(Auth::user()->role == 'super-admin'){
            return $next($request);
        }elseif (Auth::user()){
            return redirect('/home')->with(['type'=>'error', 'msg'=>'You have not permitted to access the page']);
        }else{
            return redirect('/404');
        }
    }
}
