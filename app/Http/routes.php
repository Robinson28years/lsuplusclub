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

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Api\Controllers'],function ($api){
        $api->group(['middleware'=>['jwt.auth']],function ($api){
            $api->get('lessons','LessonsController@index');
            $api->get('lessons/{id}','LessonsController@show');
            $api->get('user/me','AuthController@getAuthenticatedUser');

        });
        $api->group(['middleware'=>'jwt.refresh'],function ($api){
            $api->get('refresh','AuthController@refresh');
        });
        $api->post('user/login','AuthController@authenticate');
        $api->post('register','AuthController@register');

    });
});


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
//library
Route::get('QRLogin','QRLoginController@index');
Route::get('QRLogin/{randnum}','QRLoginController@polling');
Route::post('QRLogin/{randnum}','QRLoginController@update');

Route::group(['middleware'=>'library'],function(){
	Route::get('create','LibraryAdminController@create');
	Route::post('store','LibraryAdminController@store');
	Route::get('library/index','LibraryController@index');
	Route::get('borrow','LibraryController@borrow');
	Route::get('returnbook','LibraryController@returnbook');
	Route::any('borrowinfo/{book_id}','LibraryController@borrowinfo');
	Route::any('borrowcreate/{book_id}','LibraryController@createborrow');
	Route::any('returnbook1/{book_id}','LibraryController@returnbook1');
	Route::get('person/{id}','IndexController@edit');
	Route::post('person/{id}','IndexController@update');

	Route::post('signitem','IndexController@index');
	Route::post('signitem/{id}','VipuserController@update');

	Route::get('baoming','BaoMingController@index');
	Route::post('baoming/{id}','BaoMingController@update');

	Route::post('department','DepartmentController@store');
	Route::post('/upload','HomeController@upload');
	Route::resource('award','AwardController');
});

//
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
	Route::resource('library','LibraryAdminController');
	Route::get('library/editer/{book_id}','LibraryAdminController@editer');

	Route::get('awardadmin','AwardController@admin');
	// Route::post('/upload','ItemController@upload');
});

Route::group(['middleware' => 'person'], function() {
	Route::get('vip/apply','VipuserController@create');
	Route::post('vip/apply','VipuserController@store');

    Route::resource('discuss','PostController');
    Route::post('discuss/{id}/update','PostController@update');
    Route::post('discuss/comment','CommentsController@store');

    Route::get('user/avatar','UserController@avatar');
    Route::get('user/avatarChange','UserController@avatarChange');
    Route::post('avatar','UserController@changeAvatar');
//    Route::get('/avatar/upload','UsersController@avatar');
    Route::post('/avatar/upload','UserController@avatarUpload');
    Route::post('/crop/api','UserController@cropAvatar');
//    Route::get('discuss/create','Pos')

});

Route::group(['prefix'=>'api/v1'],function(){
	Route::resource('user','ApiController');
});
