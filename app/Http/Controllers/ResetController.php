<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResetController extends Controller
{
    public function reset(Request $request)
    {
//        dd(Auth);
        $user=Auth::user();
        $oldpassword=$request->oldpassword;
        $password=$request->password;

        $this->validate($request, [
            'oldpassword' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
        ]);
            if (password_verify($oldpassword,Auth::user()->password))
            {
                $user->password = bcrypt($password);

                $user->save();

                Auth::login($user);
                return redirect('/');
//                $this->resetPassword($request->user, $request->password);
            }
            else{
                echo "error";
            }




    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.resetpaw');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
