@extends('layouts.app')

@section('title','Inscrever-me')


@section('content')
<div class="row">

		<div class="col-lg-12"> 

			<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Avaliar Contratado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-lg btn-primary" href="{{ route('evento.index') }}"> Voltar</a>
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

    {!! Form::open(array('route' => 'contratado.store','method'=>'POST')) !!}
         @include('home.contratado.formavaliacao')
         <button type="submit" class="btn btn-lg btn-primary">Confirmar Avaliação</button>
    {!! Form::close() !!}
</div>

@endsection

