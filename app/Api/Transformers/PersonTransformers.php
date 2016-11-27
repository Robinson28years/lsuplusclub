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

class PersonTransformers extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'user_id'=>$user['id'],
            'name'=>$user['name'],
            'avatar'=>$user['avatar']
        ];
    }
}