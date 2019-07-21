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
Route::get('suspeito/{$id}', 'SuspeitoController@crime')->name('viewCrime');
Route::resource('suspeitos', 'SuspeitoController');
Route::resource('policial', 'PolicialController');
Route::resource('inicio', 'HomeController');
Route::resource('dispensa', 'DispensaController');
Route::resource('abono', 'AbonoController');
Route::resource('login', 'LoginController');
Route::resource('permutas', 'PermutarController');
Route::resource('crimes', 'CrimeController');
Route::get('permuta', 'PermutarController@indexer')->name('index');
Route::get('crime/{$id}', 'CrimeController@crime')->name('viewCrime');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
