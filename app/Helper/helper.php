<?php
//app/Helper/Helper.php
namespace App\Helper;

use App\User;
use App\Usuario;
use App\Permissao;
 
class Helper {
    
    public static function permissao(User $user) {

    	return 'Permissao';
        
    } 

    function date_br($date){ 
 
		return date('d-m-Y',strtotime($date)); 
	}
}