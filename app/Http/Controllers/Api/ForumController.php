<?php

namespace App\Http\Controllers\Api;

use App\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class ForumController extends Controller
{
    public $discussion;
    public function __construct()
    {
        $this->discussion = new Forum();
    }

    public function index()
    {
        $discussions = Forum::orderBy('updated_at','desc')->paginate(15);
        return $discussions;
    }
    public function show($id)
    {
        return $this->discussion->show($id);
    }
    public  function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $topic = array_merge($request->all(), array("user_id"=>$user->id,"last_user_id"=>0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $this->discussion->create($topic);
        return response()->json(["result"=>"success"], 200);
    }
    public function update(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $topic = array_merge($request->all(), array("user_id"=>$user->id,"last_user_id"=>0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
//        dd($topic['id']);
//        dd($this->discussion->find($topic['id']));
        if($this->discussion->findOrFail($topic['id'])->user_id != $user->id){
            return response()->json(["result"=>"无权限进行此操作"], 200);
        }

        dd($this->discussion->findOrFail($topic['id'])->update($request->all()));
        return response()->json(["result"=>"success"], 200);
    }
}
