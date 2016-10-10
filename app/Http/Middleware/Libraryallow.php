<?php

namespace App\Http\Middleware;

use App\vipuser;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Libraryallow
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
        if($request->user()){
            $departments = DB::table('vipuser')->where('email',Auth::user()->email)->get();
            if ($departments !=null){
                if($departments['0']->isvip == '同意'){
                    return $next($request);
                }else{
                    return view('errors.notvip');
                }
            }else{
                return view('errors.notvip');
            }

        }else{
            return view('errors.notvip');
        }
    }
}
