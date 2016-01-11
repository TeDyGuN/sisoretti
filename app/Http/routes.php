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

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::group(['prefix'=> 'sistema', 'namespace' => 'Sistema'], function()
{
    Route::get('succes', 'LoginController@loginExitoso');
});
Route::filter('is_admin', function()
{
    if(Auth::user()->tipo_usuario != 3 ) return Redirect::to('/');
});
Route::group(['before' => 'is_admin', 'prefix'=> 'admin', 'namespace' => 'Admin'], function()
{
    Route::get('home', 'GeneralController@index');
    Route::get('crear/admin', 'UsuarioController@admin');
    Route::get('crear/docente', 'UsuarioController@docente');
    Route::get('crear/secretaria', 'UsuarioController@secretaria');
    Route::get('crear/estudiante', 'UsuarioController@estudiante');
    Route::post('estudiante/save', 'UsuarioController@save_estudiante');
    Route::get('crear/director', 'UsuarioController@director');
    Route::get('modificar', 'UsuarioController@modificar');
});