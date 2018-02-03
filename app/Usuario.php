<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
		'cpf',
		'rg',
	    'dataNasc',													        	
        'telefone',
        'celular',
        'logradouro',
        'numero',
		'complemento',
		'bairro',
		'referencia',
		'cidade',
		'estado',
		'cadastroConfirmado'
    ];

    //protected $guarded = ['created_at', 'update_at'];
	
	//protected $hidden = [
    //    'id'
    //];

    public function dados()
    {

        return $this->belongsTo('App\User','user_id');
        
    }
}
