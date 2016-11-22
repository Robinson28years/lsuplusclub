<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/22
 * Time: 18:50
 */

namespace app\Api\Controllers;
use App\QRLogin;

class QRLoginController  extends AuthController
{
    public function polling($randnum)
    {
        $result=QRLogin::where('randnum', $randnum)->first();
        if($result->token !=""){
            dd($result->token);
//            return redirect(/QRLogin/$randnum?token=$result->token);
//            $user = JWTAuth::parseToken()->authenticate();
//            dd($user);
            Auth::loginUsingId($user->id);
            echo "true";
        }
        else
            echo "false";

    }
}