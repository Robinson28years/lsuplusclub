<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('home', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('checktime','ChecktimeController@index');
// Route::post('checktime','ChecktimeController@store');

Route::get('','IndexController@index');
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout','Auth\AuthController@getLogout');

//
// 发送密码重置链接路由
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('item/{id}','ItemController@show');
Route::group(['middleware' => 'admin'], function() {
    Route::post('vip/applyadmin/{id}','VipapplyController@update');
	Route::get('vip','VipuserController@index');
	Route::resource('item','ItemController');
	Route::get('applyall','ApplyAllController@index');
	Route::get('applyall/{id}','ApplyAllController@show');
	Route::get('newedit/{id}','ItemController@edit');
	Route::post('newedit/{id}','ItemController@update');
	Route::get('allsign','AllSignController@index');
	Route::get('department','DepartmentController@index');
	Route::post('department/{id}','DepartmentController@update');
	Route::get('vip/apply','VipuserController@create');
	Route::post('vip/apply','VipuserController@store');

	// Route::post('/upload','ItemController@upload');
});
	Route::post('/upload','HomeController@upload');

Route::group(['middleware' => 'person'], function() {
	Route::post('signitem','IndexController@index');
	Route::post('signitem/{id}','VipuserController@update');
	Route::get('person/{id}','IndexController@edit');
	Route::post('person/{id}','IndexController@update');
	Route::get('baoming','BaoMingController@index');
	Route::post('baoming/{id}','BaoMingController@update');

	Route::post('department','DepartmentController@store');
});
