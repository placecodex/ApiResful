<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * { money format helper }
 *
 * @param      integer|string  $str    The string
 * @param      string          $str2   The string 2
 *
 * @return     string          ( description_of_the_return_value )
 */
 function currency($str, $str2)
{

/*if */
if ($str <=-1 ){

 return "<div class='text-danger'>" .$str." ".$str2. '</div>';

}else{

#$str2 = '$RD';
 return "<div class='text-success'>" .$str." ".$str2. '</div>';

}/*end else*/

}/*End function*/




/**
 * [currency_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function currency_frozen_helper($str) { 


// Varibale currency
$F_DOP = "F_DOP";
$F_USD = "F_USD";
$F_EUR = "F_EUR";




if ($str == 1) {

   return $F_DOP;

} elseif ($str == 2) {

    return $F_USD;

} else {

   return $F_EUR;
}


}







/**
 * [currency_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function currency_convert($str) { 


// Varibale currency
$DOP = "DOP";
$USD = "USD";
$EUR = "EUR";



if ($str == 1) {

   return $DOP;

} elseif ($str == 2) {

    return $USD;

} else {

   return $EUR;
}


}





/**
 * [currency_helper description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function currency_freeze_money_convert($str) { 


// Varibale currency
$F_DOP = "F_DOP";
$F_USD = "F_USD";
$F_EUR = "F_EUR";



if ($str == 1) {

  return $F_DOP;

} elseif ($str == 2) {

    return $F_USD;

} else {

   return $F_EUR;
}


}




