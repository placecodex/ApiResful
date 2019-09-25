<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_library { 


 public function __construct() 
     { 

     	
        # $this->ci =& get_instance();

      // Load models
       #$this->ci->load->model('user_profiles_model');
       #$this->ci->load->model('Transaction_model');
       #$this->ci->load->model('History_model');
       #$this->ci->load->model('user_found_model');
     


     } 
















/**
 * [send_money description]
 * @return [type] [description]
 */

//verification data
public function check_data_transaction($data_transaction)
{

#$money = 10;
#$sending_user = 5;
#$user_receiving = 4;



 $send_data_transaction = $this->ci->Transaction_model->send_money($data_transaction); 





}





/**
 * [save_history description]
 * @return [type] [description]
 */
public function save_history($money_transfer,$sending_user, $user_receiving,$id_action,$user_id )
{


$save_history = $this->ci->transaction_model->save_history($money_transfer,$sending_user, $user_receiving,$id_action,$user_id);



if($save_history){ 
   echo 'El historial fue registrado correcta mente'; 
}else{
   echo 'El historial NO fue registrado';
}


}


/**
 * show balance
 * @param  [type] $user_id [description]
 * @return balance
 */
public function show_balance($user_id )
{


return $money = $this->ci->transaction_model->get_sender_money($user_id);


}


/**
 * [check_balance description]
 * @param  [type] $money_transfer [description]
 * @param  [type] $user_id        [description]
 * @return [type]                 [description]
 */
public function check_balance($money_transfer,$user_id )
{

$money = $this->ci->transaction_model->get_sender_money($user_id);

  echo $money;

}













}

?>