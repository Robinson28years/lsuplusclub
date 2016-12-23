<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\vipuser;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		$items=Item::latest()->get();
		if (Auth::user()) {
			$users=Auth::user()->id;
			$department = DB::table('department')
							->join('users','department.userid','=','users.id')
							// ->join('vipuser','users.email','=','vipuser.email')
							->select('department.*','users.email','department.status')
							->where('department.userid',$users)
							->first();
							// dd($department);

			$user=Auth::user()->email;
			$status = DB::table('vipuser')->where("email", $user)->first();
			if ($status) {

			}
			else {
			$arr =array('isvip'=>'no','department'=>'no');
			$status=json_encode($arr);
			$status=json_decode($status);
			}
			if ($department) {

			}
			else {
			$arr =array('department'=>'no');
			$department=json_encode($arr);
			$department=json_decode($department);
			}
		}
		else {

			$arr =array('isvip'=>'no');
			$status=json_encode($arr);
			$status=json_decode($status);
			$arr =array('department'=>'no');
			$department=json_encode($arr);
			$department=json_decode($department);

		}


		// dd($user);
		// dd($status);
	   return view('index',compact('items','status','department'));
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
        //废除
		$vip=vipuser::where('email', $id)->first();
		// dd($user);
		return view('auth.person',compact('vip'));
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
		$vip=vipuser::where('id', $id)->first();
		$vip->update($request->all());
		return redirect('/');
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
    public function version()
    {
        $version=array([
            'version'=>'1.0'
        ]);
        return \Response::json([
            'version'=>'1.1'
        ]);
    }
}
