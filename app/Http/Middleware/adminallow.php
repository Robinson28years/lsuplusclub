<?php

namespace App\Http\Middleware;

use Closure;

class adminallow
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
		// dd($request->user());
             if ($request->user()) {
             	if($request->user()->admin=="1")
             	return $next($request);
             	else {
             		return view('errors.notadmin');
             }
             }
			 else {
             return view('errors.notadmin');
             }
    }
}
