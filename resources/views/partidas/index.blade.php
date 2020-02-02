@extends('layouts.site')

@section('titulo','Partidas')

@section('conteudo')



<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Lista de Partidas</h2>
    </div>
    <a href="{{ route('partidas.disputadas') }}">
        <div class="p-2">
            <button class="btn btn-outline-success btn-sm">
                Relatório de Partidas Disputadas
            </button>
        </div>
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>

                <th class="d-none d-sm-table-cell">Time 1</th>
                <th class="d-none d-sm-table-cell">Time 2</th>
                <th class="d-none d-sm-table-cell">Data</th>


            </tr>
        </thead>
        <tbody>

            @foreach ($partidas as $partida)

                <tr>

                    <td class="d-none d-lg-table-cell">{{ $partida->time->nome}}</td>
                    <td class="d-none d-lg-table-cell">{{ $partida->time2->nome}}</td>
                    <td class="d-none d-lg-table-cell">{{ $partida->dataPartida }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection
