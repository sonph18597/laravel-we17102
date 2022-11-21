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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);

Route::middleware(['auth'])->group(function (){
    // tất cả đường link muốn bảo vệ chỉ cần viết vào đây
    Route::get('/test', 'TestController@index');
    Route::get('/category',['as'=>'category','uses'=>'admin\CategoryController@index']);
});
