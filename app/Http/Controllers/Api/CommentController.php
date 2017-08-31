<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Forum;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $comment = array_merge($request->all(), array("user_id" => $user->id));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'discussion_id' => 'required',
        ]);

        if ($validator->fails()) {
//            return $validator->errors();
            return response()->json(["code" => "50005","error" => $validator->errors()]);
        }
        Forum::where('id', $request->discussion_id)
                ->update(['last_user_id' => $user->id]);

        $comments = Comment::create($comment);
        $comments->user = User::find($comments->user_id);
//        return $comments;
        return response()->json(["code"=>20000,"data" => $comments]);
    }
}
