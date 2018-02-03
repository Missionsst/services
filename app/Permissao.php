<?php

namespace App;
use Permissao;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissao';

	protected $primaryKey = 'id';

    protected $fillable = [
    	'user_id',
    	'permissao'
    ];

    protected $guarded = [
	
	];
	
	 protected $hidden = [
        
    ];
	
	public function userPermissao()
    {

        return $this->hasOne('App\User');
        
    }

    public function dadosPermissao()
    {

        return $this->hasOne('App\User');
        
    }
}
