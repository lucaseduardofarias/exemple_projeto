@extends('layouts.site')

@section('titulo','Cadastrar')

@section('conteudo')

<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Time</h2>
    </div>
    <a href="{{ route('time.index') }}">
        <div class="p-2">
            <button class="btn btn-outline-info btn-sm">
                Listar
            </button>
        </div>
    </a>
</div><hr>

<form  method="post" action="{{ route('time.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span> Nome do Time</label>
            <input name="nome" type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="{{__('Nome do Time')}}" value="{{old('nome')}}" />
            @error('nome')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span> Idade</label>
            <input name="idade" type="text" class="form-control @error('idade') is-invalid @enderror" placeholder="{{__('Idade do Time')}}" value="{{old('idade')}}" />
            @error('idade')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Grupo Profisional</label>
            <select name="grupoProfisional" id="grupoProfisional" class="form-control @error('grupoProfisional') is-invalid @enderror" >
                <option value="" selected>Selecione</option>
                <option>Profissional</option>
                <option>Amador</option>
            </select>
            @error('grupoProfisional')
                    <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>


@endsection
