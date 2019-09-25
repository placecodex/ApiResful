<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('phpass-0.5/PasswordHash.php');

define('STATUS_ACTIVATED', '1');
define('STATUS_NOT_ACTIVATED', '0');

/**
 * Tank_auth
 *
 * Authentication library for Code Igniter.
 *
 * @package		Tank_auth
 * @author		Ilya Konyukhov (http://konyukhov.com/soft/)
 * @version		1.0.9
 * @based on	DX Auth by Dexcell (http://dexcell.shinsengumiteam.com/dx_auth)
 * @license		MIT License Copyright (c) 2008 Erick Hartanto
 */
class Tank_auth
{
	private $error = array();

	function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->config('tank_auth', TRUE);

		$this->ci->load->config('login_security', TRUE);

		 // geo localitation
		$this->ci->load->library('IP2Location_lib');
         
		$this->ci->load->library('session');

		$this->ci->load->library('user_agent');

		$this->ci->load->database();
		

		/*Models*/
		$this->ci->load->model('users');
		$this->ci->load->model('tbl_login_security_attempts');
        $this->ci->load->model('tbl_activity_record');

		// Try to autologin
		$this->autologin();
	}

	/**
	 * Login user on the site. Return TRUE if login is successful
	 * (user exists and activated, password is correct), otherwise FALSE.
	 *
	 * @param	string	(username or email or both depending on settings in config file)
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function login($login, $password, $remember, $login_by_username, $login_by_email)
	{
              

//  Get browser info

if ($this->ci->agent->is_browser())
{
        $agent = $this->ci->agent->browser();

        $browser_version = $this->ci->agent->version();
}
elseif ($this->ci->agent->is_robot())
{
        $agent = $this->ci->agent->robot();

        $browser_version = 'Unidentified';
}
elseif ($this->ci->agent->is_mobile())
{
        $agent = $this->ci->agent->mobile();

          $browser_version = 'Unidentified';
}
else
{
        $agent = 'Unidentified User Agent';
}


        // Platform info (Windows, Linux, Mac, etc.)
   $platform = $this->ci->agent->platform(); 

       // ip user 
   #$ip =  $this->ci->input->ip_address();

    $ip = '186.149.239.66' ;

      // Geo locate data
   $regionName = $this->ci->ip2location_lib->getRegionName($ip);
   $countryName = $this->ci->ip2location_lib->getCountryName($ip);



		if ((strlen($login) > 0) AND (strlen($password) > 0)) {

			// Which function to use to login (based on config)
			if ($login_by_username AND $login_by_email) {
				$get_user_func = 'get_user_by_login';
			} else if ($login_by_username) {
				$get_user_func = 'get_user_by_username';
			} else {
				$get_user_func = 'get_user_by_email';
			}

			if (!is_null($user = $this->ci->users->$get_user_func($login))) {	// login ok
         
				// Does password match hash in database?
				$hasher = new PasswordHash(
						$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
						$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
				if ($hasher->CheckPassword($password, $user->password)) {		
				// password ok





					if ($user->banned == 1) {									
					// fail - banned
						$this->error = array('banned' => $user->ban_reason);

					}elseif($user->attempt_block == 1 && $this->ci->config->item('ADVANCE_LOGIN_SECURE', 'login_security')){

                      // fail - account blocked
						$this->error = array('attempt_block' => "blockaccount");


					 }else {
						$this->ci->session->set_userdata(array(
								'user_id'	=> $user->id,
								'username'	=> $user->username,
								'status'	=> ($user->activated == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED, ));                         
                         
                        
						if ($user->activated == 0) {							
						// fail - not activated
							$this->error = array('not_activated' => '');

						} else {												
						// success

							if ($remember) {
								$this->create_autologin($user->id);
							}

							$this->clear_login_attempts($login);

							// clear login attemp login security

							$this->clear_login_attempts_login($login);


            // Preparedata from insert, login success         
               $data = array(
               'ip_user' =>  $ip,  
               'agent' =>  $agent,
               'browser_version' =>  $browser_version,
               'platform' =>  $platform,       
               'agent'  => $agent,
               'event'  => 'success login',
               'id_user'  => $user->id,

                //if on save region
               'countryName'  => $countryName,
               'regionName'  => $regionName); 


                     //puede imprimir: sandie
                    // save record success logi

    $id_activity = $this->ci->tbl_activity_record->save_record($data); 

                //save activity id in session variable
				$this->ci->session->set_userdata(array(
						'id_activity'	=> $id_activity
						 ));                         
                         

                
							$this->ci->users->update_login_info(
									$user->id,
									$this->ci->config->item('login_record_ip', 'tank_auth'),
									$this->ci->config->item('login_record_time', 'tank_auth'));
							return TRUE;

							redirect('/myaccount/','refresh');
						}
					}
                                
				} else {	

			// fail - wrong password
			$this->increase_login_attempt($login);
            // Security login
			$this->increase_login_attempt_login($login, $user->id);

		$login_exceeded = $this->is_max_login_attempts_exceeded_login($login);

		$count_login = $this->get_count_login_attempts($login,$user->id);

		 $email_user = $this->ci->users->get_email_by_id($user->id);
     
       


     // IF TRUE ADVANCE LOGIN SECURE ON


if ($this->ci->config->item('ADVANCE_LOGIN_SECURE', 'login_security') ) {



       //If login excedded and attempt block = 0 block acc
     if ($login_exceeded == 1 && $user->attempt_block  == 0) {
             	
        // GET BLOCK ACCOUNT
       // if on  get block attemp user acc
if ($this->ci->config->item('block_account_max_attempts_', 'login_security') ) {
$this->ci->Login_security_attempts->get_temporary_block($user->id);}


       // if on  send email notification to user
if ($this->ci->config->item('email_notify_login_max_attempts_', 'login_security') ) {
           send_email($type, $email_user, $data);}


             }elseif ($user->attempt_block  == 1) {

             // Load view account attemp blocked
             redirect('/auth/temporary_block/', 'refresh');


             }else{


         $this->error = array('password' => 'auth_incorrect_password');

			echo $login_exceeded;
			echo "</br>";
			echo $count_login;




             }


       }


// IF FALSE ADVANCE LOGIN SECURE OFF 

 $this->error = array('password' => 'auth_incorrect_password');



          // Preparedata from insert, login fail         
             $data = array(
         'ip_user'   =>   $ip,       
         'agent'     =>  $agent,
         'browser_version' => $browser_version,
         'platform'  =>  $platform,
         'event'     =>   'fail login',
         'id_user'   =>   $user->id,
          
           //if on save region
          'countryName'  => $countryName,
          'regionName'  => $regionName,
                             ); 

         // save record login fail

    $this->ci->tbl_activity_record->save_record($data); 


				}
			} else {															
			// fail - wrong login
				$this->increase_login_attempt($login);
            // login security
			#	$this->increase_login_attempt_login($login);

				$this->error = array('login' => 'auth_incorrect_login');
			}
		}
		return FALSE;
	}

	/**
	 * Logout user from the site
	 *
	 * @return	void
	 */
	function logout()
	{
		$this->delete_autologin();

		// See http://codeigniter.com/forums/viewreply/662369/ as the reason for the next line
		$this->ci->session->set_userdata(array('user_id' => '', 'username' => '', 'status' => ''));

		$this->ci->session->sess_destroy();
	}

	/**
	 * Check if user logged in. Also test if user is activated or not.
	 *
	 * @param	bool
	 * @return	bool
	 */
	function is_logged_in($activated = TRUE)
	{
		return $this->ci->session->userdata('status') === ($activated ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED);
	}

	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return $this->ci->session->userdata('user_id');
	}


	/**
	 * Get username
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->ci->session->userdata('username');
	}



	function get_userip()
	{
		return $this->ci->session->userdata('ip_address');
	}


	function get_useragent()
	{
		return $this->ci->session->userdata('user_agent');
	}




#$this->session->all_userdata() OJO


	/**
	 * Create new user on the site and return some data about it:
	 * user_id, username, password, email, new_email_key (if any).
	 *
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	array
	 */
	function create_user($name,$last_name,$username, $email, $password,$phone_number,$identification_number, $email_activation)
	{
		if ((strlen($username) > 0) AND !$this->ci->users->is_username_available($username)) {
			$this->error = array('username' => 'auth_username_in_use');

		} elseif (!$this->ci->users->is_email_available($email)) {
			$this->error = array('email' => 'auth_email_in_use');

        } elseif (!$this->ci->users->is_phone_number_available($phone_number)) {
			$this->error = array('phone_number' => 'auth_phone_number_in_use');

		} elseif (!$this->ci->users->is_identification_number_available($identification_number)) {
			$this->error = array('identification_number' => 'auth_identification_number_in_use');

		} else {


			// Hash password using phpass
			$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
			$hashed_password = $hasher->HashPassword($password);

			$data = array(

				'name'	    => $name,
				'last_name'	=> $last_name,
				'username'	=> $username,
				'password'	=> $hashed_password,
				'email'		=> $email,
				'phone_number'	=> $phone_number,
				'identification_number'		=> $identification_number,
				'last_ip'	=> $this->ci->input->ip_address(),
			);

			if ($email_activation) {
				$data['new_email_key'] = md5(rand().microtime());
			}
			if (!is_null(
		$res = $this->ci->users->create_user($data, !$email_activation))) {
				$data['user_id'] = $res['user_id'];
				$data['password'] = $password;
				unset($data['last_ip']);
				return $data;
			}
		}
		return NULL;
	}

	/**
	 * Check if username available for registering.
	 * Can be called for instant form validation.
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_username_available($username)
	{
		return ((strlen($username) > 0) AND $this->ci->users->is_username_available($username));
	}

	/**
	 * Check if email available for registering.
	 * Can be called for instant form validation.
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_email_available($email)
	{
		return ((strlen($email) > 0) AND $this->ci->users->is_email_available($email));
	}

	/**
	 * Change email for activation and return some data about user:
	 * user_id, username, email, new_email_key.
	 * Can be called for not activated users only.
	 *
	 * @param	string
	 * @return	array
	 */
	function change_email($email)
	{
		$user_id = $this->ci->session->userdata('user_id');

		if (!is_null($user = $this->ci->users->get_user_by_id($user_id, FALSE))) {

			$data = array(
				'user_id'	=> $user_id,
				'username'	=> $user->username,
				'email'		=> $email,
			);
			if (strtolower($user->email) == strtolower($email)) {		// leave activation key as is
				$data['new_email_key'] = $user->new_email_key;
				return $data;

			} elseif ($this->ci->users->is_email_available($email)) {
				$data['new_email_key'] = md5(rand().microtime());
				$this->ci->users->set_new_email($user_id, $email, $data['new_email_key'], FALSE);
				return $data;

			} else {
				$this->error = array('email' => 'auth_email_in_use');
			}
		}
		return NULL;
	}

	/**
	 * Activate user using given key
	 *
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function activate_user($user_id, $activation_key, $activate_by_email = TRUE)
	{
		$this->ci->users->purge_na($this->ci->config->item('email_activation_expire', 'tank_auth'));

		if ((strlen($user_id) > 0) AND (strlen($activation_key) > 0)) {
			return $this->ci->users->activate_user($user_id, $activation_key, $activate_by_email);
		}
		return FALSE;
	}

	/**
	 * Set new password key for user and return some data about user:
	 * user_id, username, email, new_pass_key.
	 * The password key can be used to verify user when resetting his/her password.
	 *
	 * @param	string
	 * @return	array
	 */
	function forgot_password($login)
	{




   // New added 

if ($this->ci->agent->is_browser())
{
        $agent = $this->ci->agent->browser();

        $browser_version = $this->ci->agent->version();
}
elseif ($this->ci->agent->is_robot())
{
        $agent = $this->ci->agent->robot();

        $browser_version = 'Unidentified';
}
elseif ($this->ci->agent->is_mobile())
{
        $agent = $this->ci->agent->mobile();

          $browser_version = 'Unidentified';
}
else
{
        $agent = 'Unidentified User Agent';
}


        // Platform info (Windows, Linux, Mac, etc.)
   $platform = $this->ci->agent->platform(); 


          // ip user 
   #$ip =  $this->ci->input->ip_address();


     $ip = '186.149.239.66' ;

      // Geo locate data
   $regionName = $this->ci->ip2location_lib->getRegionName($ip);
   $countryName = $this->ci->ip2location_lib->getCountryName($ip);




		if (strlen($login) > 0) {
			if (!is_null($user = $this->ci->users->get_user_by_login($login))) {

				$data = array(
					'user_id'		=> $user->id,
					'username'		=> $user->username,
					'email'			=> $user->email,
                    'ip_user' =>  $ip,  
               'agent' =>  $agent,
               'browser_version' =>  $browser_version,
               'platform' =>  $platform,       
               'agent'  => $agent,
                //if on save region
               'countryName'  => $countryName,
               'regionName'  => $regionName,
                    

					'new_pass_key'	=> md5(rand().microtime()),
				);

				$this->ci->users->set_password_key($user->id, $data['new_pass_key']);
				return $data;

			} else {
				$this->error = array('login' => 'auth_incorrect_email_or_username');
			}
		}
		return NULL;
	}

	/**
	 * Check if given password key is valid and user is authenticated.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function can_reset_password($user_id, $new_pass_key)
	{
		if ((strlen($user_id) > 0) AND (strlen($new_pass_key) > 0)) {
			return $this->ci->users->can_reset_password(
				$user_id,
				$new_pass_key,
				$this->ci->config->item('forgot_password_expire', 'tank_auth'));
		}
		return FALSE;
	}

	/**
	 * Replace user password (forgotten) with a new one (set by user)
	 * and return some data about it: user_id, username, new_password, email.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function reset_password($user_id, $new_pass_key, $new_password)
	{
		if ((strlen($user_id) > 0) AND (strlen($new_pass_key) > 0) AND (strlen($new_password) > 0)) {

			if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {

				// Hash password using phpass
				$hasher = new PasswordHash(
						$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
						$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
				$hashed_password = $hasher->HashPassword($new_password);

				if ($this->ci->users->reset_password(
						$user_id,
						$hashed_password,
						$new_pass_key,
						$this->ci->config->item('forgot_password_expire', 'tank_auth'))) {	// success

					// Clear all user's autologins
					$this->ci->load->model('user_autologin');
					$this->ci->user_autologin->clear($user->id);

					return array(
						'user_id'		=> $user_id,
						'username'		=> $user->username,
						'email'			=> $user->email,
						'new_password'	=> $new_password,
					);
				}
			}
		}
		return NULL;
	}

	/**
	 * Change user password (only when user is logged in)
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function change_password($old_pass, $new_pass)
	{
		$user_id = $this->ci->session->userdata('user_id');

		if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {

			// Check if old password correct
			$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
			if ($hasher->CheckPassword($old_pass, $user->password)) {			// success

				// Hash new password using phpass
				$hashed_password = $hasher->HashPassword($new_pass);

				// Replace old password with new one
				$this->ci->users->change_password($user_id, $hashed_password);
				return TRUE;

			} else {
           
                // fail 
			    															
				$this->error = array('old_password' => 'auth_incorrect_password');
				
			}
		}
		return FALSE;
	}

	/**
	 * Change user email (only when user is logged in) and return some data about user:
	 * user_id, username, new_email, new_email_key.
	 * The new email cannot be used for login or notification before it is activated.
	 *
	 * @param	string
	 * @param	string
	 * @return	array
	 */
	function set_new_email($new_email, $password)
	{
		$user_id = $this->ci->session->userdata('user_id');

		if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {

			// Check if password correct
			$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
			if ($hasher->CheckPassword($password, $user->password)) {			// success

				$data = array(
					'user_id'	=> $user_id,
					'username'	=> $user->username,
					'new_email'	=> $new_email,
				);

				if ($user->email == $new_email) {
					$this->error = array('email' => 'auth_current_email');

				} elseif ($user->new_email == $new_email) {		// leave email key as is
					$data['new_email_key'] = $user->new_email_key;
					return $data;

				} elseif ($this->ci->users->is_email_available($new_email)) {
					$data['new_email_key'] = md5(rand().microtime());
					$this->ci->users->set_new_email($user_id, $new_email, $data['new_email_key'], TRUE);
					return $data;

				} else {
					$this->error = array('email' => 'auth_email_in_use');
				}
			} else {															// fail
				$this->error = array('password' => 'auth_incorrect_password');
			}
		}
		return NULL;
	}

	/**
	 * Activate new email, if email activation key is valid.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function activate_new_email($user_id, $new_email_key)
	{
		if ((strlen($user_id) > 0) AND (strlen($new_email_key) > 0)) {
			return $this->ci->users->activate_new_email(
					$user_id,
					$new_email_key);
		}
		return FALSE;
	}

	/**
	 * Delete user from the site (only when user is logged in)
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete_user($password)
	{
		$user_id = $this->ci->session->userdata('user_id');

		if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {

			// Check if password correct
			$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
			if ($hasher->CheckPassword($password, $user->password)) {			// success

				$this->ci->users->delete_user($user_id);
				$this->logout();
				return TRUE;

			} else {															// fail
				$this->error = array('password' => 'auth_incorrect_password');
			}
		}
		return FALSE;
	}

	/**
	 * Get error message.
	 * Can be invoked after any failed operation such as login or register.
	 *
	 * @return	string
	 */
	function get_error_message()
	{
		return $this->error;
	}

	/**
	 * Save data for user's autologin
	 *
	 * @param	int
	 * @return	bool
	 */
	private function create_autologin($user_id)
	{
		$this->ci->load->helper('cookie');
		$key = substr(md5(uniqid(rand().get_cookie($this->ci->config->item('sess_cookie_name')))), 0, 16);

		$this->ci->load->model('user_autologin');
		$this->ci->user_autologin->purge($user_id);

		if ($this->ci->user_autologin->set($user_id, md5($key))) {
			set_cookie(array(
					'name' 		=> $this->ci->config->item('autologin_cookie_name', 'tank_auth'),
					'value'		=> serialize(array('user_id' => $user_id, 'key' => $key)),
					'expire'	=> $this->ci->config->item('autologin_cookie_life', 'tank_auth'),
			));
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Clear user's autologin data
	 *
	 * @return	void
	 */
	private function delete_autologin()
	{
		$this->ci->load->helper('cookie');
		if ($cookie = get_cookie($this->ci->config->item('autologin_cookie_name', 'tank_auth'), TRUE)) {

			$data = unserialize($cookie);

			$this->ci->load->model('user_autologin');
			$this->ci->user_autologin->delete($data['user_id'], md5($data['key']));

			delete_cookie($this->ci->config->item('autologin_cookie_name', 'tank_auth'));
		}
	}

	/**
	 * Login user automatically if he/she provides correct autologin verification
	 *
	 * @return	void
	 */
	private function autologin()
	{
		if (!$this->is_logged_in() AND !$this->is_logged_in(FALSE)) {			// not logged in (as any user)

			$this->ci->load->helper('cookie');
			if ($cookie = get_cookie($this->ci->config->item('autologin_cookie_name', 'tank_auth'), TRUE)) {

				$data = unserialize($cookie);

				if (isset($data['key']) AND isset($data['user_id'])) {

					#$this->ci->load->model('tank_auth/user_autologin');
					if (!is_null($user = $this->ci->user_autologin->get($data['user_id'], md5($data['key'])))) {

						// Login user
						$this->ci->session->set_userdata(array(
								'user_id'	=> $user->id,
								'username'	=> $user->username,
								'status'	=> STATUS_ACTIVATED,
						));

						// Renew users cookie to prevent it from expiring
						set_cookie(array(
								'name' 		=> $this->ci->config->item('autologin_cookie_name', 'tank_auth'),
								'value'		=> $cookie,
								'expire'	=> $this->ci->config->item('autologin_cookie_life', 'tank_auth'),
						));

						$this->ci->users->update_login_info(
								$user->id,
								$this->ci->config->item('login_record_ip', 'tank_auth'),
								$this->ci->config->item('login_record_time', 'tank_auth'));
						return TRUE;
					}
				}
			}
		}
		return FALSE;
	}

	/**
	 * Check if login attempts exceeded max login attempts (specified in config)
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_max_login_attempts_exceeded($login)
	{
		if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
			#$this->ci->load->model('tank_auth/login_attempts');
			return $this->ci->login_attempts->get_attempts_num($this->ci->input->ip_address(), $login)
					>= $this->ci->config->item('login_max_attempts', 'tank_auth');
		}
		return FALSE;
	}

	/**
	 * Increase number of attempts for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function increase_login_attempt($login)
	{
		if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
			if (!$this->is_max_login_attempts_exceeded($login)) {
				#$this->ci->load->model('tank_auth/login_attempts');
				$this->ci->login_attempts->increase_attempt($this->ci->input->ip_address(), $login);
			}
		}
	}

	/**
	 * Clear all attempt records for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function clear_login_attempts($login)
	{
		if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
			#$this->ci->load->model('tank_auth/login_attempts');
			$this->ci->login_attempts->clear_attempts(
					$this->ci->input->ip_address(),
					$login,
					$this->ci->config->item('login_attempt_expire', 'tank_auth'));
		}
	}


// New count login





/**
	 * get_count_login_attempts (specified in config)
	 *
	 * @param	string
	 * @return	bool
	 */
	function get_count_login_attempts($login,$id_user)
	{
		if ($this->ci->config->item('login_count_attempts_security', 'login_security')) {
			#$this->ci->load->model('tank_auth/login_security_attempts');
	return $this->ci->login_security_attempts->count_attempts_num($this->ci->input->ip_address(), $login, $id_user) ;
		}
		return FALSE;
	}



/**
	 * Check if login attempts exceeded max login attempts (specified in config)
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_max_login_attempts_exceeded_login($login)
	{
		if ($this->ci->config->item('login_count_attempts', 'login_security')) {
			#$this->ci->load->model('tank_auth/login_security_attempts');
			return $this->ci->login_security_attempts->get_attempts_num($this->ci->input->ip_address(), $login)
					>= $this->ci->config->item('login_max_attempts', 'login_security');
		}
		return FALSE;
	}

	/**
	 * Increase number of attempts for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function increase_login_attempt_login($login)
	{
		if ($this->ci->config->item('login_count_attempts_security', 'login_security')) {
			if (!$this->is_max_login_attempts_exceeded($login)) {
				#$this->ci->load->model('tank_auth/login_security_attempts');
				$this->ci->login_security_attempts->increase_attempt($this->ci->input->ip_address(), $login);
			}
		}
	}

	/**
	 * Clear all attempt records for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function clear_login_attempts_login($login)
	{
		if ($this->ci->config->item('login_count_attempts_security', 'login_security')) {
			#$this->ci->load->model('tank_auth/login_security_attempts');
			$this->ci->login_security_attempts->clear_attempts(
					$this->ci->input->ip_address(),
					$login,
					$this->ci->config->item('login_attempt_expire', 'login_security'));
		}
	}
}






	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function send_email($type, $email, &$data)
	{

		#$this->load->library('email',$config);
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}







/* End of file Tank_auth.php */
/* Location: ./application/libraries/Tank_auth.php */