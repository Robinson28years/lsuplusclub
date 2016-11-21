<?php

namespace App\Http\Controllers;

use App\Discuss;
use Illuminate\Http\Request;
use EndaEditor;

use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions = Discuss::all();
//        dd($discussions);
        return view('forum.index',compact('discussions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $discussion= Discuss::create(array_merge($request->all()));
        return redirect()->action('PostController@show',['id'=>$discussion->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discussion =  Discuss::findOrFail($id);
        $str = EndaEditor::MarkDecode("$discussion->body");
        if (isset($discussion->comments))
        foreach ($discussion->comments as $comment)
        {
            $comment->body = EndaEditor::MarkDecode("$comment->body");
        }
        return view('forum.show',compact('discussion','str'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discussion =  Discuss::findOrFail($id);
        return view('forum.edit',compact('discussion'));
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
        $discussion=Discuss::where('id', $id)->first();
        $discussion->update($request->all());
        return redirect()->action('PostController@show',['id'=>$discussion->id]);
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
