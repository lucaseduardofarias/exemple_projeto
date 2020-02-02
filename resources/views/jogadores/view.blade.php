@extends('layouts.site')

@section('titulo','View Jogador')

@section('conteudo')



<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Lista de Jogadores</h2>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>

                <th class="d-none d-sm-table-cell">Nome</th>
                <th class="d-none d-sm-table-cell">Idade</th>
                <th class="d-none d-sm-table-cell">Posição</th>
                <th class="d-none d-lg-table-cell">Cidade Natal</th>
                <th class="d-none d-lg-table-cell">Numero Atleta</th>
                <th class="d-none d-lg-table-cell">Time</th>
                <th class="d-none d-lg-table-cell">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jogadores as $jogador)

                <tr>

                    <td class="d-none d-lg-table-cell">{{ $jogador->nome }}</td>
                    <td class="d-none d-lg-table-cell">{{ $jogador->idade }}</td>
                    <td class="d-none d-lg-table-cell">{{ $jogador->posicao_atleta }}</td>
                    <td class="d-none d-lg-table-cell">{{ $jogador->cidade_nascimento }}</td>
                    <td class="d-none d-lg-table-cell">{{ $jogador->numeroAtleta }}</td>
                    <td class="d-none d-lg-table-cell">{{ $jogador->time->nome}}</td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <a href="{{ route('total.escalacoes', ['id'=>$jogador->id]) }}" class="btn btn-outline-primary btn-sm">Total de escalações</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $jogadores->links() }}
</div>


@endsection
