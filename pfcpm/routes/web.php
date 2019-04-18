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

Route::get('/menu', function(){
    return view('menu_principal');
});

/*Rota da tela de login */
Route::get('login_ini', function(){
    return view('tela_login');
});

Route::get('/cad_pol', function () {
    return view('policial_cadastrar');
});

Auth::routes();
Route::resource('policiais', 'PolicialController');
Route::resource('suspeitos', 'SuspeitoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
