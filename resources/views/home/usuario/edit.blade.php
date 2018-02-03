@extends('layouts.app')

@section('title','Edita o Usuarios')


@section('content')
<div class="row">
		<div class="col-lg-12"> 

			<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Usuario</h2>
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
    {{  Form::model($usuario, ['route'=> ['usuario.update',$usuario->id]]) }}
         @include('home.usuario.form')

         {!!Html::linkRoute('usuario.update','Salvar Usuarios', array($usuario->id), array('class' => 'btn btn-lg btn-success bnt-block active')) !!}

         {!!Html::linkRoute('usuario.index','Cancelar', array($usuario->id), array('class' => 'btn btn-lg btn-warning bnt-block active')) !!}

         {!!Html::linkRoute('usuario.destroy','Apagar', array($usuario->id), array('class' => 'btn btn-lg btn-danger bnt-block active')) !!}

    {!! Form::close() !!}
</div>
<!-- FIM 



				
			</div>
			
			<div class="btn-group">
				
			</div>
			<div class="btn-group">
				
			</div>
			</div>
		</div>

	
		</div>

		{{ Form::close() }}	
	
</div>
-->
@endsection
