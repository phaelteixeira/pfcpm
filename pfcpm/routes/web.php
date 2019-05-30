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
    return view('tela_login');
});

Route::get('inicial', function(){
    return view('inicial');
});

Route::get('/menu', function(){
    return view('menu_principal');
});

Route::get('sus', function(){
    return view('cadastrar_suspeito');
});



Route::get('/cad_pol', function () {
    return view('policial_cadastrar');
});



Auth::routes();
Route::resource('policiais', 'PolicialController');
Route::resource('suspeitos', 'SuspeitoController');
Route::resource('inicio', 'HomeController');
Route::resource('dispensa', 'DispensaController');
Route::resource('permulta', 'PermutaController');
Route::resource('abono', 'AbonoController');
Route::resource('login', 'LoginController');
Route::post('/login', 'LoginController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
