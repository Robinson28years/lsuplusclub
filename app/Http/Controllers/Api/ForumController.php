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
        return $discussions;
    }

    public function show($id)
    {
        $discussion = $this->discussion->show($id);
//        dd($discussion->first);
//        $discussion->user = User::find($discussion[user_id]);
//        $discussion->last_user = User::find($discussion[last_user_id]);
        return $discussion;
    }

    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $topic = array_merge($request->all(), array("user_id" => $user->id, "last_user_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:25',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $this->discussion->create($topic);
        return response()->json(["result" => "success"], 200);
    }

    public function update(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $topic = array_merge($request->all(), array("user_id" => $user->id, "last_user_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        if ($user->role != 'admin' && $this->discussion->findOrFail($topic['id'])->user_id != $user->id) {
            return response()->json(["error" => "你没权限操作"], 401);
        }

        $this->discussion->findOrFail($topic['id'])->update($request->all());
        //TODO: 返回完整数据
        return response()->json(["result" => "success"], 200);
    }

}
