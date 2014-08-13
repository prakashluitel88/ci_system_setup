<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Login controller class
 */

class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->lang->load('login/login');
        $this->load->helper('form');
    }

    public function index($msg = NULL) {
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('login_v', $data);
    }

    public function process() {
        // Load the model
        $this->load->model('login_m');
        // Validate the user can login
        $result = $this->login_m->validate();
        // Now we verify the result
        if (!$result) {
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        } else {
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }
    }

}

?>