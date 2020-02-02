<?php

namespace App\Http\Controllers\API;

use App\Models\Partida;
use Illuminate\Http\Request;
use App\Models\Escalao_partida;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartidaResource;
use App\Repositories\RepositoryGenerico;
use App\Http\Resources\PartidaCollection;

class PartidaAPIController extends Controller
{

    public function index()
    {
        return new PartidaCollection(Partida::paginate());
    }

    public function show(Partida $partida)
    {
        return new PartidaResource($partida->load(['escalaoPartidas', 'time']));
    }

    public function store(Request $request)
    {
        return new PartidaResource(Partida::create($request->all()));
    }

    public function update(Request $request, Partida $partida)
    {
        $partida->update($request->all());

        return new PartidaResource($partida);
    }

    public function destroy(Request $request, Partida $partida)
    {
        $partida->delete();

        return response()->noContent();
    }

    public function partidas_disputadas(){


         $jogadores = Escalao_partida::with('jogador')->orderBy('partida_id')->get();

         return  response($jogadores)->header('status', true);

    }
}
