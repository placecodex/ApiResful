<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');




/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function bank_type_helper($str) { 

if ($str == 1) {

   return "Banco popular dominicano";

} elseif ($str == 2) {

    return "BanReservas";
} else {

   return "Indefinido";
}

}








/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function bank_account_type_helper($str) { 

if ($str == 1) {

   return "Cuenta de ahorros";

} elseif ($str == 2) {

    return "cuenta corriente";
} else {

   return "Indefinido";
}

}





