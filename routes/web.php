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


Route::redirect('/', '/login', 301);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::resource('escalao', 'Escalao_partidaController');
    Route::resource('jogador', 'JogadorController');
    Route::resource('partida', 'PartidaController');
    Route::resource('time', 'TimeController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('timejogadores/{id}', 'TimeController@jogadores')->name('listarjogadores');
    Route::get('partidasDisputadas', 'PartidaController@partidas_disputadas')->name('partidas.disputadas');
    Route::get('totalEscalacaos/{id}', 'JogadorController@totalEslacao_atleta')->name('total.escalacoes');

});




