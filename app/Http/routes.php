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

Route::get('/', 'HomeController@index');

//admin

Route::get('/admin/index', 'admin\IndexController@index');
Route::post('/admin/editSystem', 'admin\IndexController@editSystem');
Route::get('/admin/user/index', function(){
    return view('admin/user/index');
});
Route::get('/admin/store/index', function(){
    return view('admin/store/index ');
});
