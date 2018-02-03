@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Usuario do Usuario </h2>
            </div>
            <div class="pull-right">
                
                <a class="btn btn-lg btn-success" href="{{ route('usuario.create') }}"> Criar novo Usuario</a>
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
            <th>CPF</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
        @foreach ($usuarios as $usuario)
    	    <tr>
    	        <td>{{ $usuario->id }}</td>
    	        <td>{{ $usuario->cpf}}</td>
                <td>{{ $usuario->cidade}}</td>
                <td>{{ $usuario->estado}}</td>
    	        <td>
    	            <a class="btn btn-lg btn-info pull-right" href="{{ route('usuario.show',$usuario->id) }}">Detalhes</a>
    	        </td>
    	    </tr>
        @endforeach
    </table>
@endsection
