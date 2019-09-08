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

route::get('/teste', function(){
    return view('teste');
});


Route::post('cadastro', 'Auth\RegisterController@create')->name('create');      
Route::post('registro', 'Auth\RegisterController@registrar')->name('registro');


Route::group(['middleware'=>['auth']], function()
{
    Route::resource('suspeitos', 'SuspeitoController');
    Route::resource('policial', 'PolicialController');
    Route::resource('inicio', 'HomeController');
    Route::resource('dispensa', 'DispensaController');
    Route::resource('abono', 'AbonoController');
    Route::resource('login', 'Auth\LoginController');
    Route::resource('permutas', 'PermutarController');
    Route::resource('crimes', 'CrimeController');
    Route::get('permuta', 'PermutarController@indexer')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/inicio', 'HomeController@confirmaPermuta')->name('inicio');
    Route::get('/registrar_crime/{suspeito}', 'CrimeController@registrar')->name('registrar');
    Route::get('suspeito/{id}', 'SuspeitoController@Listacrimes')->name('crimes');
    Route::get('confirma/{id}', 'PermutarController@atualizarStatus')->name('atualizarStatus');
    Route::get('confirmaSPO/{id}', 'PermutarController@SPO')->name('spo');
    Route::get('confirmaCMD/{id}', 'PermutarController@CMD')->name('cmd');
    Route::get('teste', 'PermutarController@teste')->name('teste');
});

Route::Auth();



