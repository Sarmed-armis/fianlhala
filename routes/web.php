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

Route::get('/','addUserController@index');
Route::post('user/add','addUserController@add');
Route::get('job/','jobController@index');
Route::get('employ','empployController@index');
Route::post('employ/show','empployController@show');
Route::post('employ/edit','empployController@edit');
Route::post('employ/alert','empployController@alert');
Route::post('job/add','jobController@add');
Route::post('user/add','addUserController@add');
Route::get('login',function (){

    return view('user.login');

});
Route::post('login','loginController@index');


Route::get('display',"DisplayController@index");




