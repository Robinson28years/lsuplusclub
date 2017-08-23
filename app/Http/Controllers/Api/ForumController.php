<?php

namespace App\Http\Controllers\Api;

use App\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return $this->discussion->store($request);
    }
}
