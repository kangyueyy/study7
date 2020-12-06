<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//--------------- blog -----------------------
Route::get('/blogindex', function () {
    return redirect('/blog');
});

Route::get('/blog', 'BlogController@index')->name('blog.home');
Route::get('/blog/{slug}', 'BlogController@showPost')->name('blog.detail');

//--------------- blog -----------------------


//--------------- blog后台 -----------------------
// 后台路由
Route::get('/admin', function () {
    return redirect('/admin/post');
});
Route::middleware('auth')->namespace('Admin')->group(function () {
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');
});

// 登录退出
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//--------------- blog后台 -----------------------

//--------------- 地图 ------------------
Route::get('/', 'Map\PostController@index')->name('map');
Route::get('/map/getpoint', 'Map\PostController@getpoint');
//--------------- 地图 ------------------

//-------------- 数据记录 --------------------
//Route::any('/oaupdate/ajax/{action}', function ($action) {
//    Route::any('/oaupdate/ajax/'.$action, 'datarecord\OaupdateController@' . $action);
//});
Route::any('/oaupdate/ajax/{action}', 'Datarecord\OaupdateController@ajax');
Route::any('/oaupdate/page/{action}', 'Datarecord\OaupdateController@page');
//-------------- 数据记录 --------------------