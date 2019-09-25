<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


 $CI =& get_instance();
// Switch to the MCrypt driver
 # $CI->$this->encryption->initialize(array('driver' => 'mcrypt'));

          // Switch back to the OpenSSL driver
  #$CI->$this->encryption->initialize(array('driver' => 'openssl'));




/**
 * [encrypt description]
 * @param  [type] $data       [description]
 * @param  [type] $secret_key [description]
 * @return [type]             [description]
 */
function encrypt_helper($data,$secret_key){



     $array = array();

        if(is_array($data)){
            foreach($data as $key=>$value){
                 $array[$key] = trim(
            base64_encode(
                mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_256,
                    $secret_key, $value, 
                    MCRYPT_MODE_ECB, 
                    mcrypt_create_iv(
                        mcrypt_get_iv_size(
                            MCRYPT_RIJNDAEL_256, 
                            MCRYPT_MODE_ECB
                            ), 
                        MCRYPT_RAND)
                    )
                )
            );
            }
            return $array;

        }else{

           return trim(
            base64_encode(
                mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_256,
                    $secret_key, $data, 
                    MCRYPT_MODE_ECB, 
                    mcrypt_create_iv(
                        mcrypt_get_iv_size(
                            MCRYPT_RIJNDAEL_256, 
                            MCRYPT_MODE_ECB
                            ), 
                        MCRYPT_RAND)
                    )
                )
            );
       }
   }


   /**
    * [decrypt description]
    * @param  [type] $data       [description]
    * @param  [type] $secret_key [description]
    * @return [type]             [description]
    */
   function decrypt($data,$secret_key)
   {
    $array = array();

        if(is_array($data)){
            foreach($data as $key=>$value){
                 $array[$key] = trim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256, 
                $secret_key, 
                base64_decode($value), 
                MCRYPT_MODE_ECB,
                mcrypt_create_iv(
                    mcrypt_get_iv_size(
                        MCRYPT_RIJNDAEL_256,
                        MCRYPT_MODE_ECB
                        ), 
                    MCRYPT_RAND
                    )
                )
            );
            }
            return $array;
        }else{
        return trim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256, 
                $sSecretKey, 
                base64_decode($sValue), 
                MCRYPT_MODE_ECB,
                mcrypt_create_iv(
                    mcrypt_get_iv_size(
                        MCRYPT_RIJNDAEL_256,
                        MCRYPT_MODE_ECB
                        ), 
                    MCRYPT_RAND
                    )
                )
            );
    }
}








?>