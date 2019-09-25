<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');




/**
 * [calculate_commission description]
 * @return [type] [description]
 */
 function get_comit( $money_transfer, $commission_service0)
{

#return number_format($money_transfer*$commission_service0/100 ,2);

return number_format($money_transfer*$commission_service0/100 ,2);


}





function generate_id_track()

{

$id_track = random_string('alpha', 2) ."-". random_string('nozero', 3) ."-" .random_string('nozero', 4);

return $id_track;

}


function generate_verification_code()

{

$id_track =  random_string('nozero', 3) ."-" .random_string('nozero', 4);

return $id_track;

}





/*helper transaction */



/**
 * { iAuth is owner }
 *
 * @param      <type>   $owner    The owner
 * @param      <type>   $id_user  The identifier user
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isowner($owner, $id_user)
{

if ($owner == $id_user) 

{
return true;
  
}else{

return false;
}



/**
 * { iAuth is owner }
 *
 * @param      <type>   $owner    The owner
 * @param      <type>   $id_user  The identifier user
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isowner_case($id_user,$id_to_dispute, $id_from_dispute)
{




if ($id_user == $id_to_dispute or  $id_user == $id_from_dispute) 

{
return true;
  
}else{

return false;
}



}






}/*end function*/


/**
 * { function_description }
 *
 * @param      <type>   $owner    The owner
 * @param      <type>   $id_user  The identifier user
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isaction($action_id)
{

if ($action_id == 1) 

{
return true;
  
}else{

return false;
}

}/*end function*/


/**
 * { function_description }
 *
 * @param      <type>   $owner    The owner
 * @param      <type>   $id_user  The identifier user
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isdispute($dispute)
{

if ($dispute == 1) 

{
return true;
  
}else{

return false;
}

}/*end function*/
 

/**
 * is refund
 *
 * @param      integer  $dispute  The dispute
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isrefund($refund)
{

if ($refund == 1) 

{
return true;
  
}else{

return false;
}

}/*end function*/
 

/**
 * { function_description }
 *
 * @param      integer  $action_id  The action identifier
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function issend($action_id)
{

if ($action_id == 1) 

{
return true;
  
}else{

return false;
}

}/*end function*/



/**
 * { function_description }
 *
 * @param      integer  $action_id  The action identifier
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function isreceived($action_id)
{

if ($action_id == 2) 

{
return true;
  
}else{

return false;
}

}/*end function*/



/**
 * { function_description }
 *
 * @param      <type>   $owner    The owner
 * @param      <type>   $id_user  The identifier user
 *
 * @return     boolean  ( description_of_the_return_value )
 */
 function youreceiver($receiver, $id_user)
{

if ($receiver == $id_user) 

{
return true;
  
}else{

return false;
}



}/*end function*/




/*helper case*/




