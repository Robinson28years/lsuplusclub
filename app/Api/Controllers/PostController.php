<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/12/10
 * Time: 16:33
 */

namespace App\Api\Controllers;


use App\Comment;
use App\Discuss;
use Illuminate\Http\Request;
use App\User;

class PostController extends BaseController
{
    public function store(Request $request)
    {
        $discussion= Discuss::create(array_merge($request->all()));
        $arr=array("status"=>"success");
        $status=json_encode($arr);
        return $status;
    }
    public function commentStore(Request $request)
    {
        $comment=Comment::create($request->all());
        $id=$comment->user->id;
        $discuss= Discuss::where('id',$comment->discussion->id)
//           ->get()
            ->update(['last_user_id'=>$id]);
        $arr=array("status"=>"success");
        $status=json_encode($arr);
        return $status;
//        dd($discuss);
//        return redirect()->action('PostController@show',['id'=>$comment->discussion->id]);
    }
}