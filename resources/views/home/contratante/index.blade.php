@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contratado </h2>
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
</div>
   
@endsection
