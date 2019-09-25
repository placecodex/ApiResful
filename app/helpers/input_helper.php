<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');




/**
 * Strips all non-numerics from the card number.
 *
 * @param string The card number to clean up.
 * @return string The stripped down card number.
 */
function input_number_clean($number) {
    return preg_replace("/[^0-9]/", "", $number); 
}
