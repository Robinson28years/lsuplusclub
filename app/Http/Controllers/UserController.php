<?php

namespace App\Http\Controllers;

use App\User;
use App\vipuser;
use Illuminate\Http\Request;
use EndaEditor;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Response;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
		// dd($users);
		foreach ($users as $user) {
			if (strlen($user->avatar)<2) {
				$user->update(['avatar'=>'uploads/userIMG.jpg']);
			}

		}
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
        $user = User::where('id',$id)->first();
        if (isset($user->comments))
            foreach ($user->comments as $comment)
            {
                $comment->body = EndaEditor::MarkDecode("$comment->body");
            }
        return view('users.person',compact('user'));
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

    public function avatar()
    {
//        dd(Auth::user());
        return view('users.avatar');
    }
    public function avatarChange()
    {
//        dd(Auth::user());
        return view('users.avatarChange');
    }

    public function changeAvatar(Request $request)
    {
//        dd($request);
        $file = $request->file('avatar');
        $destinationPath = 'uploads/';
        $filename = \Auth::user()->id.'_'.time().$file->getClientOriginalName();
        $file->move($destinationPath,$filename);
        Image::make($destinationPath.$filename)->fit(400)->save();
        $user = User::find(\Auth::user()->id);
        $user->avatar = '/'.$destinationPath.$filename;
        $user->save();
//        return \Response::json([
//            'success' => true,
//            'avatar' => asset($destinationPath.$filename)
//        ]);

        return redirect('/user/avatarChange');
    }

    public function cropAvatar(Request $request)
    {
//        dd($request->all());
        $photo = mb_substr(Auth::user()->avatar,1);
//        dd($photo);
        $width = (int)$request->get('w');
        $height = (int)$request->get('h');
        $xAlign = (int)$request->get('x');
        $yAlign = (int)$request->get('y');

        Image::make($photo)->crop($width,$height,$xAlign,$yAlign)->fit(400)->save();

        return redirect('/user/avatar');
    }

    /**
     * 用户信息修改
     */
    public function editVipInfo(){
        $vip=Auth::user()->vipuser;
        return view('auth.person',compact('vip'));
    }
}
