<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratado extends Model
{
    protected $table = 'contratado';

    protected $primaryKey = 'id';

    protected $fillable = [
        'evento_id',
        'contratado',
        'nota',
        'obs',
        'dataNota',
        'dataCadastro',
        'dataConfirmado'
    ];

    protected $guarded = ['created_at', 'update_at'];
	
	protected $hidden = [
        'id'
    ];
}
