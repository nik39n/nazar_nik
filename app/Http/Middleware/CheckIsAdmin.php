<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
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
        $user = Auth::user();
        if(!$user->isAdmin()){
            session()->flash('warning', "у вас нет прав админимтратора");
            echo('у вас нет прав админимтратора');
            return redirect()->route('index');
        }
        session()->flash('warning', "у вас нет прав админимтратора");
        return $next($request);
    }
}
