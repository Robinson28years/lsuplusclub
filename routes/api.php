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

Route::post('register', 'Api\AuthController@register');     // 注册
Route::post('login', 'Api\AuthController@login');           // 登陆
Route::post('refresh', 'Api\AuthController@refresh');       //刷新token
Route::group(['middleware' => 'jwt.refresh'], function () {
});


Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('get_user_details', 'Api\AuthController@get_user_details');  // 获取用户详情
    //论坛
    Route::post('topics', 'Api\ForumController@store');
//    Route::post('topics/update','Api\ForumController@update');
    Route::post('comments', 'Api\CommentController@store');
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
        Route::put('activities/{id}', 'Api\ActivityController@update');
        Route::delete('activities/{id}', 'Api\ActivityController@destroy');
        //获取所有用户
        Route::get('users/all','Api\AuthController@get_all_users');
    });

});
Route::get('topics', 'Api\ForumController@index');
Route::get('topic/{id}', 'Api\ForumController@show');

Route::get('books', 'Api\BookController@index');
Route::get('books/{id}', 'Api\BookController@show');

Route::get('activities', 'Api\ActivityController@index');
Route::get('activities/{id}', 'Api\ActivityController@show');