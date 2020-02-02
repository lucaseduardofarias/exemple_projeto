<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartidasFormValidation;
use App\Models\Partida;
use App\Repositories\RepositoryGenerico;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use PDF;

class PartidaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(RepositoryGenerico $repository, RepositoryGenerico $repositoryAux)
    {
        $repository->setModel(\App\Models\Partida::class);
        $this->repository = $repository;
        $this->repositoryAux = $repositoryAux;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidas = $this->repository->with(['time', 'time2'])->findAll();
        return view('partidas.index', compact('partidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->repositoryAux->setModel(\App\Models\Time::class);
        $times = $this->repositoryAux->all();
        return view('partidas.create', compact('times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Uso do  FormValidation
    public function store(PartidasFormValidation $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('partida.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function partidas_disputadas()
    {

        $this->repositoryAux->setModel(\App\Models\Escalao_partida::class);

        $jogadores = $this->repositoryAux->with('jogador')->orderBy('partida_id')->findAll();

        return \PDF::setOptions(['defaultFont' => 'sans-serif'])
            ->loadView('pdf.partidasdisputadas', compact('jogadores'))
            ->stream('partidas_disputadas' . date('Y') . '.pdf');

    }
}
