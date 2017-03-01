<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::post('/verify', function () {
//    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'), env('PRIVATE_KEY'));
//    if ($captcha->isFromGTServer()) {
//        if($captcha->success()){
//            return 'success';
//        }
//        return 'no';
//    }
//    if ($captcha->hasAnswer()) {
//        return "answer";
//    }
//    return "no answer";
//});
//
//Route::get('acm/sign/captcha', function () {
//    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('GEETEST_ID'), env('GEETEST_KEY'));
//
//    echo $captcha->GTServerIsNormal();
//});


Route::get('auth/geetest','ItemController@postValidate');

Route::get('/home', 'HomeController@index');
Route::post('skills',function(){
});
Route::get('aaa','OAuthController@oauth');

Route::get('discuss/create','DiscussController@create');
Route::post('discuss','DiscussController@store');
Route::get('discuss/{id}/edit','DiscussController@edit');
Route::post('discuss/{id}/update','DiscussController@update');
Route::post('discuss/comment','CommentController@store');
Route::group(['middleware' => 'admin'], function(){
	Route::get('acm/showAll','ItemController@showAll');
});

Route::get('discuss','DiscussController@index');
Route::get('discuss/{id}','DiscussController@show');

Route::get('acm/sign','ItemController@index');

Route::post('acm/store','ItemController@store');
//Route::get('acm/store','ItemController@success');
