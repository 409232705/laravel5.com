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


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');
//上面一行代码Route::resource('users', 'UsersController');等同于：
Route::get('/users/create', 'UsersController@create')->name('users.create');    //创建用户的页面
Route::post('/users', 'UsersController@store')->name('users.store');    //创建用户

Route::get('/users', 'UsersController@index')->name('users.index'); //显示用户列表的页面
Route::get('/users/{user}', 'UsersController@show')->name('users.show');    //显示单个用户信息的页面

Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');   //删除用户

Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');   //修改单个用户信息的页面
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');  //修改用户
//上面一行代码将等同于end