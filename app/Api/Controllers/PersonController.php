<?php
/**
 * Created by PhpStorm.
 * User: Robinson-5
 * Date: 2016/11/9
 * Time: 18:06
 */

namespace App\Api\Controllers;



use App\Api\Transformers\PersonTransformers;
use App\User;
//use \BaseController;

class PersonController extends BaseController
{
    public function index()
    {
        $user= User::all();

        return $this->collection($user,new PersonTransformers());
    }

    public function show($id)
    {
        $user = User::find($id);
        if (! $user){
            return $this->response->errorNotFound('Used not found');
        }
        return $this->item($user,new PersonTransformers());
    }
}