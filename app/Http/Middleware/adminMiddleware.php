<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class adminMiddleware
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
        if(Auth::user()->role == 'admin'){
     		return $next($request);
		}elseif(!empty(Auth::user()->role)){
			if(Auth::user()->role=='staff'){
			    return redirect('staff/dashboard');
			}elseif(Auth::user()->role=='vendor'){
				return redirect('vendor/dashboard');
			}else{
				return redirect('user/dashboard');
			}
		}else{
		   dd('you can access only that things..');
		}
    } 
}