<?php

namespace App\Http\Controllers;

use App\Discuss;
use EndaEditor;
use Illuminate\Http\Request;

class DiscussController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions = Discuss::orderBy('updated_at','desc')->paginate(15);;
    //    dd($discussions);
        foreach ($discussions as $discussion)
        {
			// dd($discussion);
			// echo $discussion;
            if(isset($discussion->last_user)){
				foreach($discussion->last_user->comments as $comment){
	                if($comment->discussion->id==$discussion->id){
	                    $discussion->last_user->last_time=$comment->created_at;
	                }
	            }
			}

        }
		// dd($discussions);

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
        return redirect()->action('DiscussController@show',['id'=>$discussion->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article =  Discuss::findOrFail($id);
        $str = EndaEditor::MarkDecode("$article->body");
        if (isset($article->comments))
        foreach ($article->comments as $comment)
        {
            $comment->body = EndaEditor::MarkDecode("$comment->body");
        }

        return view('forum.show',compact('article','str'));
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
        return redirect()->action('DiscussController@show',['id'=>$discussion->id]);
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
