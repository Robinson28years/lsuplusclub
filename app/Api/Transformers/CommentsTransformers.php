<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/27
 * Time: 12:09
 */

namespace App\Api\Transformers;

use App\Comment;
use App\Discuss;
use League\Fractal\TransformerAbstract;

class CommentsTransformers extends TransformerAbstract
{
//    public function transform(Discuss $discussions)
    public function transform(Comment $comments)
    {
        return [
//            'id'=>$comments->discussion['id'],
//            'title'=>$comments->discussion['title'],
//            'body'=>$comments->discussion['body'],
//            'user_id'=>$discussions['user_id'],
//            'last_user_id'=>$discussions['last_user_id'],
//            'created_at'=>$discussions['created_at'],
            'comment_id'=>$comments->id,
            'name'=>$comments->user->name,
            'avatar'=>$comments->user->avatar,
            'body'=>$comments->body,
            'created_at'=>$comments->created_at,
        ];
    }
}