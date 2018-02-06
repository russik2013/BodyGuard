<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckUser
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
        if(User::where('remember_token', $request -> remember_token) -> first())
            return $next($request);
        else return response(['status' => 'client error', 'message' => 'you are not auth', 'data' => null]);
    }
}
