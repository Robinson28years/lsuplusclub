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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('sign','ACMController@store');

Route::group(['middleware' => 'jwt.auth'], function () {
    //用户
    Route::get('get_user_details', 'Api\AuthController@get_user_details');  // 获取用户详情
    Route::post('user/reset','Api\UserController@resetPassword');
    Route::post('user/avatar','Api\UserController@setAvatar');
    //论坛
    Route::post('discussions', 'Api\ForumController@store');
//    Route::post('topics/update','Api\ForumController@update');
    Route::post('comments', 'Api\CommentController@store');
    Route::delete('discussions/{id}', 'Api\ForumController@destroy');
    //书
    Route::post('books', 'Api\BookController@store');
    Route::put('books/{id}', 'Api\BookController@update');
    Route::patch('books/{id}', 'Api\BookController@borrow');
    Route::delete('books/{id}', 'Api\BookController@destroy');
    //活动
    Route::post('activities/{id}/user', 'Api\ActivityController@sign');
    //后台管理
    Route::group(['middleware' => 'admin'], function () {
        Route::post('activities', 'Api\ActivityController@store');
        Route::post('activities/{id}', 'Api\ActivityController@update');
        Route::delete('activities/{id}', 'Api\ActivityController@destroy');
        //获取所有用户
        Route::get('users/all','Api\AuthController@get_all_users');
    });

});
Route::get('discussions', 'Api\ForumController@index');
Route::get('discussions/{id}', 'Api\ForumController@show');

Route::get('books', 'Api\BookController@index');
Route::get('books/{id}', 'Api\BookController@show');

Route::get('activities', 'Api\ActivityController@index');
Route::get('activities/{id}', 'Api\ActivityController@show');
//用户
Route::post('register', 'Api\AuthController@register');     // 注册
Route::post('login', 'Api\AuthController@login');           // 登陆
Route::post('user/code','Api\UserController@sendCode');
Route::post('user/forget','Api\UserController@forget');
Route::post('user/avatar','Api\UserController@setAvatar');
Route::get('user/{id}/discussions','Api\UserController@allDiscussions');
Route::get('user/{id}/comments','Api\UserController@allComments');
Route::get('user/{id}','Api\UserController@user');
Route::post('refresh', 'Api\AuthController@refresh');       //刷新token
Route::group(['middleware' => 'jwt.refresh'], function () {
});