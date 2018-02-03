<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

    		{{ Form::label('label0','Nome do Evento')}}
    		{{ Form::label('label1',$evento->nome)}}
   
        	{{ Form::hidden('evento_id', $evento->id , ["class" => 'form-control']) }}

    		{{ Form::hidden('contratado', Auth::id(), ["class" => 'form-control']) }}
        
            {{ Form::hidden('nota','Nota')}}
			{{ Form::hidden('nota', null, array('placeholder' => 'nota','class' => 'form-control'))}}

			{{ Form::hidden('obs','obs')}}
			{{ Form::hidden('obs', null, array('placeholder' => 'obs','class' => 'form-control'))}}

			{{ Form::hidden('dataNota','Data da Nota')}}
			{{ Form::hidden('dataNota', date('Y-m-d') , ["class" => 'form-control'])}}
			
			{{ Form::label('dataCadastro','Data da Inscrição')}}
			{{ Form::date('dataCadastro', date('Y-m-d') , ["class" => 'form-control'])}}
			
			{{ Form::hidden('dataConfirmado','Data da Confirmação')}}
			{{ Form::hidden('dataConfirmado', date('Y-m-d') , ["class" => 'form-control'])}}
			
            
    </div>
</div>