<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Middleware\GetUserFromToken;

class Authjwt extends GetUserFromToken
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
        if (! $token = $this->auth->setRequest($request)->getToken()) {
//            return $this->respond('tymon.jwt.absent', 'token_not_provided', 400);
            return response()->json(['code'=>50013,'error' => 'token没提供']);
        }

        try {
            $user = $this->auth->authenticate($token);
        } catch (TokenExpiredException $e) {
//            return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), [$e]);
            return response()->json(['code'=>50011,'error' => 'token过期.']);
        } catch (JWTException $e) {
//            return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), [$e]);
            return response()->json(['code'=>50012,'error' => 'token无效']);
        }

        if (! $user) {
            return $this->respond('tymon.jwt.user_not_found', 'user_not_found', 404);
            return response()->json(['code'=>50014,'error' => '用户没找到']);
        }

        $this->events->fire('tymon.jwt.valid', $user);

        return $next($request);
    }
}
