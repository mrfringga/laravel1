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

Route::get('/auth/login', 'AuthController@login')->name('login');
Route::get('/auth/register', 'AuthController@register')->name('register');
Route::post('/auth/register', 'AuthController@prosesRegister')->name('proses.register');
Route::post('/auth/login', 'AuthController@prosesLogin')->name('proses.login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::group(['middleware' => ['auth','RoleUser:3']], function () {
    Route::get('/main/home', 'MainController@home')->name('main.home');  
});
Route::group(['middleware' => ['auth', 'RoleUser:1']], function () {
Route::get('/admin/index', 'AdminController@index')->name('admin.dasboard');
Route::get('/admin/users/list', 'AdminController@M_User')->name('admin.user.list');
Route::post('/auth/login', 'AuthController@prosesLogin')->name('proses.login');
Route::post('/admin/user/list/update', 'AdminController@updadeUser')->name('admin.update.user');
Route::get('/admin/user/update/{iduser}', 'AdminController@showUser')->name('admin.edit.user');
Route::patch('/admin/user/update/{id}/process', 'AdminController@updateUser');
Route::delete('/admin/user/delete/{id}', 'AdminController@deleteUser');
});
// http://127.0.0.1:8000/admin/users/list