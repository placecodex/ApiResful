<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function method_helper($str) { 

if ($str == 5) {

   return "Boton de pago";

} elseif ($str == 4) {

    return "Tarjeta de credito o debito";

} elseif ($str == 1) {

    return "3Pago Saldo (DOP)";

} elseif ($str == 2) {

    return "3Pago Saldo (USD)";

} elseif ($str == 3) {

    return "3Pago Saldo (EUR)";

} else {

   return "3Pago Saldo";
}




/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */

#"method_payment" => method_helper($r->id_paymethod, $r->id_currency),
function __method_helper($str,$str2) { 

if ($str == 5) {

   return "Boton de pago";

} elseif ($str == 4) {

    return "Tarjeta de credito o debito "."(".currency_convert($str2).")"  ;

} elseif ($str == 1) {

    return "3Pago Saldo (DOP)";

} elseif ($str == 2) {

    return "3Pago Saldo (USD)";

} elseif ($str == 3) {

    return "3Pago Saldo (EUR)";

} else {

   return "3Pago Saldo";
}

}








}

/**
 * [currency_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function currency_helper($str) { 


if ($str == 1) {

   return '$RD';

} elseif ($str == 2) {

    return '$USD';

} else {

   return 'EUR';
}


}



/**
 * [state helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function state_helper($str) { 


if ($str == 0) {

   return 'Pendiente';

} elseif ($str == 1) {

    return 'Completado';


}elseif ($str == 2) {

    return 'Retenido';


}elseif ($str == 3) {

    return 'En revision';


  }elseif ($str == 4) {

    return 'Rembolsado';

} else {

   return 'Procesando';
}


}



/**
 * [user_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
 function user_helper($str)
 {
    $CI =& get_instance();
   # $CI->load->model('user/Users_profile_model');
    return $CI->Tbl_users_profile->get_user_fullname($str);
  } 




/**
 * [getUserFullname ]
 * @param  [type] $id_user [description]
 * @return [type]          [description]
 */
function getUserFullnam33e($str){

  $CI =& get_instance();
  #$this->db->from('founds');
$CI->db->where('id', $str);
$query = $this->db->get('users');


foreach ($query->result() as $row)
{          
        return ucwords($row->name)." ". ucwords($row->last_name) ;
       
}

}


/*****************************************/


/**
 * [action_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function action_helper($id_user, $id_to, $id_from, $refund=NULL) { 


if ($id_user == $id_from ) {

   return 'Pago enviado' ;

} elseif ($id_user == $id_to) {

    return 'Pago recibio';

#} elseif($refund == 1) {


   #  return 'Pago reembolsado';
}else{

   return 'procesando';
}


}



/**
 * [action id helper
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function action_id_helper($id_user, $id_to, $id_from, $refund) { 


if ($id_user == $id_from  ) {

// payment sended
   return 1 ;

} elseif ($id_user == $id_to ) {

// payment receibed
    return 2;

#} elseif($refund == 1) {


    # return 3;
}else{

   return 4;
}


}








/**
 * [owner helper]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function _owner_helper($id_me, $id_to, $id_from) { 




  if ($id_from == $id_me) {

  // enviado  

  return user_helper($id_to) ;


} elseif ($id_user == $id_to) {

// recibido

    return user_helper($id_from);

} else {

  // pensando

   return user_helper($id_from);
}





}












/**
 * [owner helper]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function owner_helper($id_me, $id_to, $id_from, $name_to, $name_from) { 




  if ($id_from == $id_me) {

  // enviado  

  return $name_to ;


} elseif ($id_me == $id_to) {

// recibido

    return $name_from;;

} else {

    // recibido

   return $name_from;
}





}






/**
 * [owner helper]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function general_money_helper($id_me, $id_to, $id_from, $moneysend, $moneyreceived) { 




  if ($id_from == $id_me && $refund == 0) {

  // enviado  

  return number_format($moneysend,2) ;


} elseif ($id_user == $id_to) {

// recibido

    return number_format($moneyreceived,2);

} else {

  // pensando

   return number_format($moneyreceived,2);
}





}











/*****************************************/


/**
 * [action_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function _choose_user_helper($id_from,$id_to,$id_me) { 


if ($id_from == $id_me) {

   return 'Enviado' ;

} elseif ($id_to == $id_me) {

    return 'Recibido';
    
} else {

   return 'Procesando';
}


}








/**
 * [action_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function _state_trans_helper($id_from,$id_to,$id_me) { 


if ($id_from == $id_me) {

   return 'Enviado' ;

} elseif ($id_to == $id_me) {

    return 'Recibido';
    
} else {

   return 'Procesando';
}


}






/**
 * [action_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function _comit_helper($id_from,$id_to,$comit) { 


if ($id_from == $id_me) {

   return number_format($comit,2) ;

    
} else {

   return NULL;
}


}







