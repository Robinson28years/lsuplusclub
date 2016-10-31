<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\QRLogin;
use Auth;
use App\User;

class QRLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$randnum = "";
		for ($i=0; $i < 8; $i++) {
			$randnum .=rand(0,9);
		}
		QRLogin::create(['randnum' => $randnum]);
		// DB::table('qrlogin')->insert(
    	// ['randnum' => $randnum]
		// );
        return view('QRLogin.index',compact('randnum'));
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
    public function update(Request $request,$randnum,$password)
    {
		$rand=QRLogin::where('randnum', $randnum)->first();
		$password2=User::where('id',$request->userid)->first();
		if ($request->password==$password2->password) {
			// echo "true";
		$rand->update($request->all());
		}
		else {
			echo "no";
		}
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

	public function polling($randnum)
	{
		$result=QRLogin::where('randnum', $randnum)->first();
		if($result->userid !=""){
				Auth::loginUsingId($result->userid);
				echo "true";
		}
		else
		echo "false";

	}
}
