<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'nome',
        'descricao',
        'qtdePessoas',
        'dataInicio', 
        'horaInicio',
        'dataFim', 
        'horaFim'
    ];

    protected $guarded = ['id','created_at', 'update_at'];
	
	//protected $hidden = [
    //   'id_evento'
    //];
}
