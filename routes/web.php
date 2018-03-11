<?php

use Jenssegers\Agent\Agent;

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
Route::get('/acm2018', function () {
    $agent = new Agent();
    if($agent->isMobile()){
        return redirect('/dashboard');
        // return view('dashboard');
    }else{
        return view('acm2018');
    }
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/change','Api\UserController@change');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
