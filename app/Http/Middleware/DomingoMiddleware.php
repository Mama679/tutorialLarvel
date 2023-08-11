<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DomingoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(date('w')==='0'){
            echo "Es domingo!<br>";
        }else{
            echo "No es domingo<br>";
           
        }
        return $next($request);
        
    }
}
