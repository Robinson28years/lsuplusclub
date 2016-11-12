<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/9
 * Time: 21:44
 */

namespace App\Api\Transformers;


use League\Fractal\TransformerAbstract;
use App\User;

class LessonTransformers extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id'=>$user['id'],
            'user'=>$user['name'],
            'email'=>$user['email']
        ];
    }
}