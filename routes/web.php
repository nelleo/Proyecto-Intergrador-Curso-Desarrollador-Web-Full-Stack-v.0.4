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

 Route::get('/inicio',"homeController@home");

Route::get('/miPerfil', function () {
    return view('miPerfil');
}); 
Route::get('/config', function () {
    return view('config');
});
Route::post('/deletePost/{id}', "homeController@deletePost");
Route::get('/logout', "homeController@logout");

Route::get('/registro', "Auth\RegisterController@mostrarRegistro");

Route::post('/posteo', "homeController@posteo");

Route::get('/misPosteos', "homeController@misPosteos");

Route::get('/misFotos',  "homeController@misFotos");

Route::get('/misVideos', "homeController@misVideos");

Route::get('/misDivulgaciones',"homeController@misDivulgaciones");

Route::get('/home', "homeController@index");

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
