<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checklogin
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
        if (Auth::check()) {
            if(Auth::user()->level==2){
                return redirect()->route('index');
            }else{
                return $next($request);
            }
            
        }else{
          return redirect()->route('login');

        }

    }
}
