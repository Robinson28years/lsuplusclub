<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vipuser;
use App\Transform\UserTransform;
use App\User;
use App\QRLogin;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
	protected $UserTransform;
	public function __construct(UserTransform $UserTransform)
	{
		$this->UserTransform = $UserTransform;
		$this->middleware('auth.basic');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::all();
		// $user = User::all();
//		 return \Response::json([
//		 	'status'=>'success',
//		 	'status_code'=> 200,
//		 	'data'=> $this -> UserTransform->transformCollection($user->toArray())
//		 ]);
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

        // dd("$request");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user = User::find($id);
		$user =User::where("email", $id)->first();
		if (! $user) {
			return \Response::json([
				'status'=>'failed',
				'status_code'=>404,
				'message'=>'not found'
			]);
		}
		return \Response::json([
			'status'=>'success',
			'status_code'=> 200,
			'data'=> $this ->UserTransform-> transform($user)
		]);
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
    public function update(Request $request, $randnum)
    {

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

	// public function transformCollection($user)
	// {
	// 	return array_map([$this,'transform'],$user->toArray());
	// }
	//
	// public function transform($user)
	// {
	// 	// return array_map(function($user){
	// 		return [
	// 			'id'=>$user['id'],
	// 			'user'=>$user['name'],
	// 			'email'=>$user['email']
	// 		];
	// 	// });
	// }
}
