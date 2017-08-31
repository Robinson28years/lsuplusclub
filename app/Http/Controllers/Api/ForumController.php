<?php

namespace App\Http\Controllers\Api;

use App\Forum;
use App\User;
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

    public function index(Request $categories)
    {
//        dd($categories->categories);
        if ($categories->categories == '') {
            $discussions = Forum::orderBy('updated_at', 'desc')
                ->paginate(6);
        } else {
            $discussions = Forum::where('categories', $categories->categories)
                ->orderBy('updated_at', 'desc')
                ->paginate(6);
        }
        foreach ($discussions as $discussion) {
            $discussion->user = User::find($discussion->user_id);
            $discussion->last_user = User::find($discussion->last_user_id);
        }
//        return $discussions;
        return response()->json(["code"=>20000,"data" => $discussions]);
    }

    public function show($id)
    {
        $discussion = $this->discussion->show($id);
//        dd($discussion->first);
//        $discussion->user = User::find($discussion[user_id]);
//        $discussion->last_user = User::find($discussion[last_user_id]);
//        return $discussion;
        return response()->json(["code"=>20000,"data" => $discussion]);
    }

    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $discussions = array_merge($request->all(), array("user_id" => $user->id, "last_user_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:25',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $discussion = $this->discussion->create($discussions);
//        return response()->json(["result" => "success"], 200);
        return response()->json(["code"=>20000,"data" => $discussion]);
    }

    public function update(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $discussion = array_merge($request->all(), array("user_id" => $user->id, "last_user_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
//            return $validator->errors();
            return response()->json(["code" => "50005","error" => $validator->errors()]);
        }
        if ($user->role != 'admin' && $this->discussion->findOrFail($discussion['id'])->user_id != $user->id) {
            return response()->json(["code"=>"40001","error" => "你没权限操作"]);
        }

        $discussion = $this->discussion->findOrFail($discussion['id'])->update($request->all());
//        return response()->json(["result" => "success"], 200);
        return response()->json(["code"=>20000,"data" => $discussion]);
    }

    public function destroy($id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $discussion = Forum::findOrFail($id);
        if ($user->role != 'admin' && $user->id != $discussion->user_id) {
            return response()->json(["code" => "40001","error" => "你没权限操作"]);
        }
        $discussion->delete();
//        return "success";
        return response()->json(["code"=>20000,"msg" => "删除成功"]);
    }

}
