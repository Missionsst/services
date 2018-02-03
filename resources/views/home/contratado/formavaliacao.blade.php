<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

    		{{ Form::label('label0','Nome do Evento: ')}}
    		{{ Form::label('label1',$evento->nome)}}
   
        	{{ Form::hidden('evento_id', $evento->id , ["class" => 'form-control']) }}
        	{{ Form::hidden('contratado', $contratado->contratado , ["class" => 'form-control']) }}
        
            {{ Form::label('nota','Nota')}}
			{{ Form::number('nota', null, array('placeholder' => 'nota','class' => 'form-control'))}}

			{{ Form::label('obs','Avaliação por escrito')}}
			{{ Form::text('obs', null, array('placeholder' => 'obs','class' => 'form-control'))}}

			{{ Form::hidden('dataNota', date('Y-m-d') , ["class" => 'form-control'])}}
			
			{{ Form::hidden('dataCadastro','Data da Inscrição')}}
			{{ Form::hidden('dataCadastro', date('Y-m-d') , ["class" => 'form-control'])}}
			
			{{ Form::hidden('dataConfirmado','Data da Confirmação')}}
			{{ Form::hidden('dataConfirmado', date('Y-m-d') , ["class" => 'form-control'])}}
			
            
    </div>
</div>