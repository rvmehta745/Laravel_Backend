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


/* Backend Panel Routes */

Route::get('admin/login','AuthController@getLogin')->name('admin.login');
Route::post('admin/login','AuthController@postLogin')->name('admin.post.login');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){

	Route::get('/','DashboardController@index')->name('admin.dashboard');
	Route::delete('/logout','AuthController@Logout')->name('admin.logout');

});