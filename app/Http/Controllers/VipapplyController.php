<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\UserRegistered;
use App\User;
use App\vipuser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VipapplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return redirect('view.vip');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// dd($request);
		// User::create(array_merge($request->all()));
		// $vip=User::where('email','$request->email')->get();
		// dd($vip);
		// $vip->update(['isvip'=>'$request->isvip']);
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
		// dd($request);
        $vip=vipuser::where('id', $id)->first();
		$user=User::where('email', $vip->email)->first();
		// dd($vip);
		event(new UserRegistered($user));
		$vip->update($request->all());
		return redirect('/vip');
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
