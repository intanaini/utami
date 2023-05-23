<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\User;
class Role extends Controller
{
    public function index()
{
    // Only employees can access this action.
}
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return $next($request);
        } else if ($user->hasRole('employee')) {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
