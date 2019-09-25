<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');






/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function buttom_type_helper($str) { 

if ($str == 1) {

   return "Donacion";

} else {

   return "Pago";
}

}





/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function state_buttom_helper($str) { 

if ($str == 1) {

   return "Activado";

} else {

   return "Desactivado";
}

}



/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function button_img_helper($str) { 

if ($str == 1) {

 return base_url('assets/img/4.png');

} elseif ($str == 2) {

    return base_url('assets/img/5.png');
} else {

  return base_url('assets/img/4.png');
}

}



/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function button_appearance_helper($str) { 

if ($str == 1) {


 return site_url('assets/btn/pagar_ahora.png');


} elseif ($str == 2) {

    return site_url('assets/btn/comprar_ahora.png');
} else {

  return site_url('assets/btn/comprar_ahora.png');
}

}








/**
 * [method_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function button_type_helper($str) { 

if ($str == 1) {

 return "Donacion";

} elseif ($str == 2) {

     return "Pago";
} else {

   return "Comprar Ahora!";
}

}