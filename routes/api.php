<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Api\AuthController@register');     // 注册
Route::post('login', 'Api\AuthController@login');           // 登陆
Route::group(['middleware' => 'jwt.auth', 'jwt.refresh'], function () {
    Route::post('get_user_details', 'Api\AuthController@get_user_details');  // 获取用户详情
});
Route::get('topics','Api\ForumController@index');
Route::get('topic/{id}','Api\ForumController@show');
Route::post('refresh', 'Api\AuthController@refresh');
Route::group(['middleware' => 'jwt.refresh'], function () {
});
