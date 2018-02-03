<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

    		{{ Form::hidden('evento_id', 

    			(!empty($evento->id)?$evento->id ? $evento->id:false:null),

    			

    			["class" => 'form-control']) }}

    		{{ Form::hidden('user_id', Auth::id(), ["class" => 'form-control']) }}
        
            {{ Form::label('nome','Nome do Evento')}}
			{{ Form::text('nome', null, array('placeholder' => 'Name','class' => 'form-control'))}}

			{{ Form::label('descricao','Nome do Evento')}}
			{{ Form::textarea('descricao', null, array('placeholder' => 'Descrição','class' => 'form-control'))}}

			{{ Form::label('qtdePessoas','Quantidade de Pessoas para o Evento')}}
			{{ Form::number('qtdePessoas', null, array('placeholder' => 'Descrição','class' => 'form-control'))}}

			{{ Form::label('dataInicio','Data do Evento')}}
			{{ Form::date('dataInicio', null, ["class" => 'form-control'])}}
			
			{{ Form::label('horaInicio','Hora do Evento')}}
			{{ Form::time('horaInicio', null, ["class" => 'form-control'])}}
			
			{{ Form::label('dataFim','Fim do Evento')}}
			{{ Form::date('dataFim', null, ["class" => 'form-control'])}}
			
			{{ Form::label('horaFim','Hora do Fim doEvento')}}
			{{ Form::time('horaFim', null, ["class" => 'form-control'])}}


            
    </div>
</div>