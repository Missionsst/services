@extends('layouts.app')

@section('title','Create Usuarios')


@section('content')
<div class="row">
		<div class="col-lg-12"> 

			<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar novo Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-lg btn-primary" href="{{ route('usuario.index') }}"> Voltar</a>
            </div>
        </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ops!</strong> Tem alguns erros, verifique.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'usuario.store','method'=>'POST')) !!}
         @include('home.usuario.form')
         <button type="submit" class="btn btn-lg btn-primary">Salvar Dados</button>
    {!! Form::close() !!}
</div>

@endsection

