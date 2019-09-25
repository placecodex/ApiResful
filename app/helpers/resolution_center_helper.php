<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');




/**
 * [calculate_commission description]
 * @return [type] [description]
 */
 function type_case_helper( $str)
{



if ($str == 1) {

   return "reporte";

} elseif ($str == 2) {

    return "reclamacion";
} else {

   return "no definido";
}



}





 function id_reason_helper( $str)
{



if ($str == 1) {

   return "transaccion no autorizada";

} elseif ($str == 2) {

    return "producto diferentes al descrito";

} elseif ($str == 3) {

    return "plagio";

} else {

   return "no definido";
}



}






function _generate_id_track()

{

$id_track = random_string('alpha', 2) ."-". random_string('nozero', 3) ."-" .random_string('nozero', 4);

return $id_track;

}









