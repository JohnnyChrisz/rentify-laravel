<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $role): Response
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $authUserRole = Auth::user()->role;

        switch($role){
            case 'superadmin':
            if ($authUserRole == 0){
                return $next($request);
            }
            break;
            case 'owner':
            if($authUserRole == 1 ){
                return $next($request);
            }
            break;
            case 'user':
                if($authUserRole == 2){
                    return $next($request);
                }
            break;
        }

        switch($authUserRole){
            case 0:
                return redirect()->route('dashboard');
            case 1:
                return redirect()->route('Owner');
            case 2:
                return refirect()->route('myhome');       
        }
        return redirect()->route('login');
    }
}
