<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

    		{{ Form::hidden('user_id', Auth::id(), ["class" => 'form-control']) }}

    		{{ Form::label('nome', Auth::user()->name, ["class" => 'form-control']) }}
        
            {{ Form::label('cpf','CPF')}}
			{{ Form::number('cpf', null, array('placeholder' => 'CPF','class' => 'form-control'))}}

			{{ Form::label('rg','RG')}}
			{{ Form::number('rg', null, array('placeholder' => 'RG','class' => 'form-control'))}}

			{{ Form::label('dataNasc','Data Nascimento')}}
			{{ Form::date('dataNasc', null, ["class" => 'form-control'])}}
			
			{{ Form::label('telefone','Telefone')}}
			{{ Form::number('telefone', null, ["class" => 'form-control'])}}
			
			{{ Form::label('celular','Celular')}}
			{{ Form::number('celular', null, ["class" => 'form-control'])}}
			
			{{ Form::label('logradouro','Logradouro (Rua/Av etc)')}}
			{{ Form::text('logradouro', null, ["class" => 'form-control'])}}
			
			{{ Form::label('numero','Numero')}}
			{{ Form::number('numero', null, ["class" => 'form-control'])}}

			{{ Form::label('complemento','Complemento')}}
			{{ Form::text('complemento', null, ["class" => 'form-control'])}}

			{{ Form::label('bairro','Bairro')}}
			{{ Form::text('bairro', null, ["class" => 'form-control'])}}

			{{ Form::label('referencia','Referencia')}}
			{{ Form::text('referencia', null, ["class" => 'form-control'])}}

			{{ Form::label('cidade','Cidade')}}
			{{ Form::text('cidade', null, ["class" => 'form-control'])}}

			{{ Form::label('estado','Estado')}}
			{{ Form::text('estado', null, ["class" => 'form-control'])}}

			{{ Form::hidden('cadastroConfirmado', now(), ["class" => 'form-control'])}}
            
    </div>
</div>