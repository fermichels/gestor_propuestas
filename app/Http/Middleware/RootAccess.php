<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RootAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->tipo=='ROOT'){
            return $next($request);
        }
    
    //dd('acceso negado, solo Usuarios Administradores tienen accesso!');
        return redirect('/error404');
    }
}
