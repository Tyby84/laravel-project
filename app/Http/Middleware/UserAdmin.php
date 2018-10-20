<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAdmin
	
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
		
		//if the user is logged in
		
		if(Auth::check()){
			
			if(Auth::user()->isAdmin()){
				
				return $next($request);
				
			}
		}
		//if the user is not logged in
		return redirect('/');
      
    }
}
