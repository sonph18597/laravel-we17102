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
Route::get('/home/product/detail/{id}','home\HomeController@product_detail')->name('route_FrontEnd_Product_detail');


Route::get('/cart','home\HomeController@cart')->name('route_FrontEnd_cart');
Route::get('/addToCart/{id}','home\HomeController@addToCart')->name('route_add_to_cart');
Route::get('/cartView','home\CartController@render');

Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);


Route::middleware(['auth'])->group(function (){
    // tất cả đường link muốn bảo vệ chỉ cần viết vào đây
    //user
    Route::get('/user', 'admin\UserController@index')->name('route_BackEnd_User_index');
    Route::match(['get','post'],'/user/add',"admin\UserController@add");
    Route::get('/user/detail/{id}','admin\UserController@detail')->name('route_BackEnd_User_detail');
    Route::post('/user/update/{id}','admin\UserController@update')->name('route_BackEnd_User_update');
    //category
    Route::get('/category','admin\CategoryController@index')->name('route_BackEnd_Category_index');
    Route::match(['get','post'],'/category/add',"admin\CategoryController@add");
    Route::get('/category/detail/{id}','admin\CategoryController@detail')->name('route_BackEnd_Category_detail');
    Route::post('/category/update/{id}','admin\CategoryController@update')->name('route_BackEnd_Category_update');
    //product
    Route::get('/product', 'admin\ProductController@index')->name('route_BackEnd_Product_index');
    Route::match(['get','post'],'/product/add',"admin\ProductController@add");
    Route::get('/product/detail/{id}','admin\ProductController@detail')->name('route_BackEnd_Product_detail');
    Route::post('/product/update/{id}','admin\ProductController@update')->name('route_BackEnd_Product_update');
});
