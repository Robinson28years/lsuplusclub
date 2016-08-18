<?php

namespace App\Http\Middleware;

use Closure;

class Personallow
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
		return $next($request);
	 }
	 else {
	 return view('errors.notapply');
	 }
    }
}
