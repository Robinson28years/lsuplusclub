<?php

namespace App\Http\Controllers\Api;

use App\Activity;
use App\UserActivity;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'desc')
            ->paginate(3);
        return $activities;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $activity = array_merge($request->all(), array("publisher_id" => $user->id));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:25',
            'img' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'sign_deadline' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
//        $activity->sign_deadline = Carbon::createFromFormat();
        $activity = Activity::create($activity);
        return $activity;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::findOrfail($id);
        return $activity;
    }

    public function sign($id)
    {
        $deadline = Activity::findOrFail($id)->sign_deadline;
        if (Carbon::now() > $deadline) {
            return response()->json(["error" => "报名已截止"], 400);
        }
        $user = JWTAuth::parseToken()->authenticate();
        $check = UserActivity::where(['user_id'=>$user->id,'activity_id' => $id])->get();
//        dd(count($check) );
        if (count($check) > 0) {
            return response()->json(["error" => "你已报名"], 400);
        }
        $sign = UserActivity::create(['user_id' => $user->id, 'activity_id' => $id]);
        return $sign;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $activity = Activity::findOrFail($id);
        if ($user->role != 'admin' && $user->id != $activity->publisher_id) {
            return response()->json(["error" => "你没权限操作"], 401);
        }
        $activity = array_merge($request->all(), array("id" => $activity->id));
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:25',
            'img' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'sign_deadline' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $activity = Activity::where('id', $id)->update($request->all());
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $activity = Activity::findOrFail($id);
        if ($user->role != 'admin' && $user->id != $activity->publisher_id) {
            return response()->json(["error" => "你没权限操作"], 401);
        }
        $activity->delete();
    }
}
