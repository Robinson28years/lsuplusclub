<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vipuser;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VipuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$vip=vipuser::latest()->get();
        return view('admin.index',compact('vip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apply.vip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($);
		vipuser::create(array_merge($request->all()));
		// $vip = $request::where('isvip')->get();
		// $cp = array();
		// $cp=$request->isvip;
		// $vip=User::where('email','$request->email')->get();
		// dd($vip);
		// $vip->update($request->all());
		// $vip->update(['isvip'=>'$request->isvip']);
		// User::create(["isvip"=>"$request->isvip"]);
		return redirect('/');
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
		$vip=vipuser::where('email', $id)->first();
		// dd($vip);
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
