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

Route::get('/', "UserController@login")->name('login');
Route::get('/logout', "UserController@logout")->name('logout');
Route::post('/logar', "UserController@logar")->name('logar');
Route::group(['prefix' => "admin", 'middleware' => "auth"], function () {
    Route::get('/perfil', "UserController@perfil")->name('perfil');
    Route::get('/home', "HomeController@index")->name('home');
    Route::get('/sobre', "HomeController@sobre")->name('sobre');
});

Route::group(['prefix' =>'administrador', 'middleware'=>"auth"], function(){
    Route::get('/', "AdminController@index");
    Route::get('/create', "AdminController@create");
    Route::get('/edit/{id}', "AdminController@edit");
    Route::get('/delete/{id}', "AdminController@destroy");
});

Route::group(['prefix' =>"secretaria", 'middleware'=>"auth"], function(){
    Route::get('/', "SecretariaController@index");
    Route::get('/create', "SecretariaController@create");
    Route::get('/edit/{id}', "SecretariaController@edit");
    Route::get('/delete/{id}', "SecretariaController@destroy");
});

Route::group(['prefix' =>"recursos", 'middleware'=>"auth"], function(){

});