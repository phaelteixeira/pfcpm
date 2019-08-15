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
})->name('/');

Route::get('/cadastro', function(){
    return view('cadastro');
});


Route::post('registro', 'Auth\RegisterController@create')->name('create');
Route::post('registro', 'Auth\RegisterController@registrar')->name('registrar');


Route::group(['middleware'=>['auth']], function()
{
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
    Route::get('/home', 'HomeController@index')->name('home');
});



Auth::routes();

