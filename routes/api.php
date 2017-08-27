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
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('get_user_details', 'Api\AuthController@get_user_details');  // 获取用户详情
    //论坛
    Route::post('topics','Api\ForumController@store');
//    Route::post('topics/update','Api\ForumController@update');
    Route::post('comments','Api\CommentController@store');
    //书
    Route::post('books','Api\BookController@store');
    Route::put('books/{id}','Api\BookController@update');
    Route::patch('books/{id}','Api\BookController@borrow');
    Route::delete('books/{id}','Api\BookController@destroy');

});
Route::get('topics','Api\ForumController@index');
Route::get('topic/{id}','Api\ForumController@show');

Route::get('books','Api\BookController@index');
Route::get('books/{id}','Api\BookController@show');

Route::post('refresh', 'Api\AuthController@refresh');
Route::group(['middleware' => 'jwt.refresh'], function () {
});
