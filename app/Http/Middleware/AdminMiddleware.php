<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $role): Response
    {
        /*if (Auth::check()) {
            //admin role ==1
            //user role==0
            if (Auth::user()->role=='1') {                
                return $next($request); //redirect('/homeadmins')-> with('mesage','Access Denegado no eres admin'); //$next($request);
            } else{
                return redirect('/dashboard')-> with('mesage','Access Denegado no eres admin');

            }
        } else{
            return redirect('/login')-> with('mesage','Logea tu acces');

        }*/

        if(Auth::check() && Auth::user()->role==$role){
            return $next($request);
        }
        return response()->json(["No tienes permiso para ingresar"]);
    }
}
