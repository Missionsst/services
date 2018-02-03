<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratante extends Model
{
   	protected $table = 'contratante';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'evento_id',
    	'contratante',
    	'nota',
    	'obs',
    	'dataNota'
    ];

    //protected $guarded = ['created_at', 'update_at'];
	
	//protected $hidden = [
    //    'id'
    //];
}
