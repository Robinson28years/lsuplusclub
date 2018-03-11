<?php

namespace App\Http\Controllers;

use App\ACM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ACMController extends Controller
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
       $validator = Validator::make($request->all(), [
       'studentid' => 'required|unique:acm2018',
       'college' => 'required',
		'name' => 'required',
		'grades' => 'required',
		'phone' => 'required|unique:acm2018',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $acm=ACM::create($request->all());
            return "ok";
        }
        // dd($validator->errors());
        // // if($validator)
        // return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ACM  $aCM
     * @return \Illuminate\Http\Response
     */
    public function show(ACM $aCM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ACM  $aCM
     * @return \Illuminate\Http\Response
     */
    public function edit(ACM $aCM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ACM  $aCM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ACM $aCM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ACM  $aCM
     * @return \Illuminate\Http\Response
     */
    public function destroy(ACM $aCM)
    {
        //
    }
}
