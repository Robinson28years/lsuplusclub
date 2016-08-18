<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\vipuser;
use App\Item;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplyAllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$items=Item::latest()->get();
		$users=vipuser::get();
		// $num=6;
		return view('admin.applyall',compact('items','users','num'));
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
		$item=Item::where("id", $id)->first();
		$users = DB::table('vipuser')->where("$id", 1)->get();
		// $users=vipuser::get();
		// $num=$id;
		return view('admin.item',compact('item','users','num'));
		// $item=Item::where("id", $id);
        // $users=vipuser::where("S"+$id, "1");
		// // dd($users);
		// return view('admin.item',compact('item','users'));
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
