<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/27
 * Time: 12:09
 */

namespace App\Api\Transformers;

use App\Discuss;
use League\Fractal\TransformerAbstract;

class CommentsTransformers extends TransformerAbstract
{
    public function transform(Discuss $discussions)
    {
        return [
            'id'=>$discussions['id'],
            'title'=>$discussions['title'],
            'body'=>$discussions['body'],
            'user_id'=>$discussions['user_id'],
            'last_user_id'=>$discussions['last_user_id'],
            'created_at'=>$discussions['created_at'],
            'comments'=>$discussions->comments
        ];
    }
}