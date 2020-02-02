<?php

namespace App\Http\Controllers\API;

use App\Models\Escalao_partida;
use App\Http\Resources\Escalao_partidaCollection;
use App\Http\Resources\Escalao_partidaResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Escalao_partidaAPIController extends Controller
{
    public function index()
    {
        return new Escalao_partidaCollection(Escalao_partida::paginate());
    }

    public function show(Escalao_partida $escalaoPartida)
    {
        return new Escalao_partidaResource($escalaoPartida->load(['jogador', 'partida']));
    }

    public function store(Request $request)
    {
        return new Escalao_partidaResource(Escalao_partida::create($request->all()));
    }

    public function update(Request $request, Escalao_partida $escalaoPartida)
    {
        $escalaoPartida->update($request->all());

        return new Escalao_partidaResource($escalaoPartida);
    }

    public function destroy(Request $request, Escalao_partida $escalaoPartida)
    {
        $escalaoPartida->delete();

        return response()->noContent();
    }

}
