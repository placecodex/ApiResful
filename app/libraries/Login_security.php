<?php (defined('BASEPATH') OR defined('SYSPATH')) or die('No direct access allowed.');




class Login_security
{
    private $error = array();

    function __construct()
    {
        $this->ci =& get_instance();

        $this->ci->load->config('tank_auth', TRUE);

        $this->ci->load->library('session');
        $this->ci->load->database();
        #$this->ci->load->model('users');
       #$this->ci->load->model('activity_record_model');

    }






/**
     * Check if login attempts exceeded max login attempts (specified in config)
     *
     * @param   string
     * @return  bool
     */
    function login_attempts_checker($login)
    {
        if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
           # $this->ci->load->model('tank_auth/login_attempts');
            return $this->ci->login_attempts->get_attempts_num($this->ci->input->ip_address(), $login)
                    >= $this->ci->config->item('login_max_attempts', 'tank_auth');
        }
        return FALSE;
    }



/**
     * Check if login attempts exceeded max login attempts (specified in config)
     *
     * @param   string
     * @return  bool
     */
    function is_max_login_attempts_exceeded($login)
    {
        if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
           # $this->ci->load->model('tank_auth/login_attempts');
            return $this->ci->login_attempts->get_attempts_num($this->ci->input->ip_address(), $login)
                    >= $this->ci->config->item('login_max_attempts', 'tank_auth');
        }
        return FALSE;
    }

    /**
     * Increase number of attempts for given IP-address and login
     * (if attempts to login is being counted)
     *
     * @param   string
     * @return  void
     */
    private function increase_login_attempt($login)
    {
        if ($this->ci->config->item('login_count_attempts', 'tank_auth')) {
            if (!$this->is_max_login_attempts_exceeded($login)) {
                $this->ci->load->model('tank_auth/login_attempts');
                $this->ci->login_attempts->increase_attempt($this->ci->input->ip_address(), $login);
            }
        }
    }

    /**
     * Clear all attempt records for given IP-address and login
     * (if attempts to login is being counted)
     *
     * @param   string
     * @return  void
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
}

/* End of file Tank_auth.php */
/* Location: ./application/libraries/Tank_auth.php */