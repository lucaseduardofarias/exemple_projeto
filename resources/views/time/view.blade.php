@extends('layouts.site')

@section('titulo','View')

@section('conteudo')

<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Lista de Times</h2>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>

                <th class="d-none d-sm-table-cell">Nome do Time</th>
                <th class="d-none d-sm-table-cell">Idade do Time</th>
                <th class="d-none d-lg-table-cell">GrupoProfisional</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($times as $time)

                <tr>

                    <td class="d-none d-lg-table-cell">{{ $time->nome }}</td>
                    <td class="d-none d-lg-table-cell">{{ $time->idade }}</td>
                    <td class="d-none d-lg-table-cell">{{ $time->grupoProfisional }}</td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <a href="{{ route('listarjogadores', $time->id) }}" class="btn btn-outline-primary btn-sm">Visualizar Jogadores</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a href="{{ route('listarjogadores', $time->id) }}" class="dropdown-item">Visualizar Jogadores</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $times->links() }}
</div>


@endsection
