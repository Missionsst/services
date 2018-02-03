<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

    		{{ Form::label('label1',$evento->nome)}} <br>
   
        	{{ Form::hidden('evento_id', $evento->id , ["class" => 'form-control']) }}

    		{{ Form::hidden('contratante', Auth::id(), ["class" => 'form-control']) }}
        
            {{ Form::label('nota','Nota')}}
			{{ Form::number('nota', null, array('placeholder' => 'nota','class' => 'form-control'))}}

			{{ Form::label('obs','obs')}}
			{{ Form::text('obs', null, array('placeholder' => 'obs','class' => 'form-control'))}}

			{{ Form::label('dataNota','Data da Nota')}}
			{{ Form::date('dataNota', date('Y-m-d') , ["class" => 'form-control'])}}
            
    </div>
</div>