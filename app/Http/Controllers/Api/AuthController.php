<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Middleware\BaseMiddleware;

class AuthController extends BaseMiddleware
{
    /*注册*/
    public function register(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $token = JWTAuth::fromUser($user);
        return response()->json(['code'=>20000,'result'=>$token]);
    }

    /*登陆*/
    public function login(Request $request)
    {
        $input = $request->all();
        if (!$token = JWTAuth::attempt($input)) {
            return response()->json(['code'=>50010,'error' => '邮箱或密码错误.']);
        }
        return response()->json(['code'=>20000,'result' => $token]);
    }

    /*刷新 token */
    public function refresh(Request $request)
    {
        try {
            $newToken = $this->auth->setRequest($request)->parseToken()->refresh();
        } catch (TokenExpiredException $e) {
            return response()->json(['code'=>50011,'error' => 'token过期.']);
//            return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), ['code'=>50011,$e]);
        } catch (JWTException $e) {
            return response()->json(['code'=>50011,'error' => 'token无效']);
//            return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), ['code'=>50012,$e]);
        }
        return response()->json(['code'=>20000,'result' => $newToken]);
    }

    /*获取用户信息*/
    public function get_user_details(Request $request)
    {
        $input = $request->all();
        $user = JWTAuth::parseToken()->authenticate();
//        $user = JWTAuth::toUser($input['token']);
        return response()->json(['code'=>20000,'result' => $user]);
    }

    public function get_all_users()
    {
        $users = User::orderBy('created_at', 'desc')
            ->paginate(15);
//        return $users;
        return response()->json(['code'=>20000,'result' => $users]);
    }
}
