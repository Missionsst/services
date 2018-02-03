@extends('layouts.app')

@section('title','Edita o Eventos')


@section('content')
<div class="row">
		<div class="col-lg-12"> 

			<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Evento</h2>
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
    {{  Form::model($evento, ['route'=> ['evento.update',$evento->id]]) }}
         @include('home.evento.form')

         {!!Html::linkRoute('evento.update','Salvar Eventos', array($evento->id), array('class' => 'btn btn-lg btn-success bnt-block active')) !!}

         {!!Html::linkRoute('evento.index','Cancelar', array($evento->id), array('class' => 'btn btn-lg btn-warning bnt-block active')) !!}

         {!!Html::linkRoute('evento.destroy','Apagar', array($evento->id), array('class' => 'btn btn-lg btn-danger bnt-block active')) !!}

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
