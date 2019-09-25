<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/


#$config['smtp_user'] = "notificacion.3pago@gmail.com";//also valid  Google Apps Accounts
#$config['smtp_pass'] = "Claveclave123";

$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.googlemail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "server.vsi@gmail.com";//also valid  Google Apps Accounts
$config['smtp_pass'] = "miclave3817";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */