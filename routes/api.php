<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();
});

Route::apiResource('times', '\App\Http\Controllers\API\TimeAPIController');

Route::apiResource('jogadors', '\App\Http\Controllers\API\JogadorAPIController');

Route::apiResource('escalaoPartidas', '\App\Http\Controllers\API\Escalao_partidaAPIController');

Route::apiResource('partidas', '\App\Http\Controllers\API\PartidaAPIController');

Route::apiResource('users', '\App\Http\Controllers\API\UserAPIController');

//relatorio partidas disputadas para consumo via API
Route::get('partidas_disputadas', '\App\Http\Controllers\API\PartidaAPIController@partidas_disputadas');

//relatorio de convocao por atleta, lembrando que que é obrigatorio passar o parametro id para o retorno do atleta.
Route::get('convocacao_atleta/{id}', '\App\Http\Controllers\API\JogadorAPIController@convocacao_atleta');
