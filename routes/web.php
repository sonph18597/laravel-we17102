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

Route::get('/', 'home\HomeController@index')->name('home');

Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);

Route::middleware(['auth'])->group(function (){
    // tất cả đường link muốn bảo vệ chỉ cần viết vào đây
    Route::get('/user', 'admin\UserController@index')->name('route_BackEnd_User_index');
    Route::get('/category','admin\CategoryController@index')->name('route_BackEnd_Category_index');
    Route::match(['get','post'],'/user/add',"admin\UserController@add");
    Route::get('/user/detail/{id}','admin\UserController@detail')->name('route_BackEnd_User_detail');
    Route::post('/user/update/{id}','admin\UserController@update')->name('route_BackEnd_User_update');
});
