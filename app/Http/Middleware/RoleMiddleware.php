<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    //     // Periksa apakah pengguna memiliki peran yang diperlukan
    //     if (!$request->user() || !$request->user()->hasRole($roles)) {
    //         return response()->json(['message' => 'Akses ditolak!'], 403);
    //     }

    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    // if(in_array($request->user()->role, $roles)){
    //     return $next($request);
    // }
    //     return redirect('login');
    // }

    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);
        foreach ($roles as $role) {
            $user = Auth::user()->role;
            if( $user == $role){
                return $next($request);
            }

        }

        return redirect('/home');
    }

}
