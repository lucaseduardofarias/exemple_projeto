@extends('layouts.site')

@section('titulo','Cadastrar Partidas')

@section('conteudo')

<form  method="post" action="{{ route('partida.store') }}">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="time_id">
                    {{__('Adversário 1')}}
                </label>
                <select name="time_id" id="time_id" class="form-control @error('time_id') is-invalid @enderror">
                    @foreach($times as $time)
                    <option value="{{ $time->id }}" @if (old( 'time_id')== $time->id ) selected @endif > {{$time->nome}} </option>
                    @endforeach
                </select>
                @error('time_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="time_id">
                    {{__('Adversário 2')}}
                </label>
                <select name="time2_id" id="time2_id" class="form-control @error('time2_id') is-invalid @enderror">
                    @foreach($times as $time)
                    <option value="{{ $time->id }}" @if (old( 'time_id')== $time->id ) selected @endif > {{$time->nome}} </option>
                    @endforeach
                </select>
                @error('time2_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="time_id">
                    {{__('Data da partida')}}
                </label>
                <input type="date" name="dataPartida" class="form-control @error('dataPartida') is-invalid @enderror">
                @error('dataPartida')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

@endsection

