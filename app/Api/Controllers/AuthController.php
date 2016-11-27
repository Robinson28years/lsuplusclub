<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/10
 * Time: 19:29
 */

namespace App\Api\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\User;

class AuthController extends BaseController
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
//        dd($credentials);

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $newUsr=[
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'password' =>bcrypt( $request->get('password'))
        ];
        $user = User::create($newUsr);
        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'));

    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    public function apiResetPassword(Request $request)
    {

//        dd($request->token);
        $user = JWTAuth::parseToken()->authenticate();
        $id = $user->id;
        $ppp = User::where('id',$id)->first();
        $truePassword = $ppp->password;
        $oldpassword=$request->oldpassword;
        $password=$request->password;
        $email = $user->email;

        $this->validate($request, [
            'oldpassword' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
        ]);
    if (password_verify($oldpassword,$truePassword)){
        $user->password = bcrypt($password);
        $user->save();
        $user2 =array(
            "email" => $email,
            "password" => $password,
        );
        $token =JWTAuth::attempt($user2);
//        $token=json_encode($token);
        return response()->json(compact('token'));

    }
    else
    {
            $error = 'old_password_error';
            $status = 400;
            return response()->json(compact('error','status'));

    }


    }

    public function refresh(){

    }
//    public function getAvatar(){
//        $user = JWTAuth::parseToken()->authenticate();
//        $avatar=$user->avatar;
//    }



}