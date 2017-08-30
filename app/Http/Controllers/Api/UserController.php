<?php

namespace App\Http\Controllers\Api;

use App\Mail\forgetPassword;
use App\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function sendCode(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->get();
//        dd($user);
        $code = rand(100000, 999999);
        Cache::put($email, $code, 60);
        Mail::to($user)->send(new forgetPassword($email, $code));
        return "success";
    }

    public function forget(Request $request)
    {
        $code = Cache::get($request->email);
        if ($request->code == $code) {
            $user = User::where('email', $request->email)->first();
//            dd($user->name);
            $user->password = password_hash($request->newpassword, PASSWORD_DEFAULT);
            $user->save();
        } else {
            return response()->json(["error" => "验证码错误", "code" => 50001]);
        }
        return response()->json(["msg" => "修改密码成功", "code" => 20000]);
    }

    public function resetPassword(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $result = password_verify($request->password, $user->password);
        if ($result) {
            $user->password = password_hash($request->newpassword, PASSWORD_DEFAULT);
            $user->save();
        }else {
            return response()->json(["error" => "密码错误", "code" => 50002]);
        }
        return response()->json(["msg" => "修改密码成功", "code" => 20000]);
    }

    public function setAvatar(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $user->avatar = $request->avatar;
        return response()->json(["msg" => "修改头像成功", "code" => 20000]);
    }
}
