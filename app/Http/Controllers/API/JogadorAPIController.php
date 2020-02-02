<?php

namespace App\Http\Controllers\API;

use App\Models\Jogador;
use App\Http\Resources\JogadorCollection;
use App\Http\Resources\JogadorResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JogadorAPIController extends Controller
{
    public function index()
    {
        return new JogadorCollection(Jogador::paginate());
    }

    public function show(Jogador $jogador)
    {
        return new JogadorResource($jogador->load(['escalaoPartidas', 'time']));
    }

    public function store(Request $request)
    {
        return new JogadorResource(Jogador::create($request->all()));
    }

    public function update(Request $request, Jogador $jogador)
    {
        $jogador->update($request->all());

        return new JogadorResource($jogador);
    }

    public function destroy(Request $request, Jogador $jogador)
    {
        $jogador->delete();

        return response()->noContent();
    }
    public function convocacao_atleta($id)
    {
        $escalacao = Jogador::where('id','=', $id)->with('escalaoPartidas')->get();
        return response($escalacao);
    }

}
