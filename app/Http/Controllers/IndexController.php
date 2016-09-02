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
			$user=Auth::user()->email;
			$status = DB::table('vipuser')->where("email", $user)->first();
			if ($status) {

			}
			else {
			$arr =array('isvip'=>'no');
			$status=json_encode($arr);
			$status=json_decode($status);
			}
		}
		else {

			$arr =array('isvip'=>'no');
			$status=json_encode($arr);
			$status=json_decode($status);

		}

		// dd($user);
		// dd($status);
	   return view('index',compact('items','status'));
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
}
