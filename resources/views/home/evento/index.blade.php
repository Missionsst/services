@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Eventos disponíveis </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-lg btn-success" href="{{ route('evento.create') }}"> Criar novo Evento</a>
            </div>
        </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered col-lg-12">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Hora</th>
            <th class="pull-right">Ações</th>
        </tr>
        @foreach ($eventos as $evento)
    	    <tr>
    	        <td>{{ $evento->id }}</td>
    	        <td>{{ $evento->nome}}</td>
    	        <td>{{ $evento->descricao}}</td>
    	        <td>{{ $evento->dataInicio}}</td>
    	        <td>{{ $evento->horaInicio}}</td>
    	        <td>
                    <a class="btn btn-lg btn-info pull-right" href="{{ route('evento.show',$evento->id) }}">Detalhes</a>
                </td>
    	    </tr>
        @endforeach
    </table>
@endsection
