<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
		if ($request->user()) {
             	if($request->user()->admin=="1")
             	return $next($request);
             	else {
             		return response()->view('welcome');
             }
             }
			 else {
             return response()->view('welcome');
             }
    }
}
