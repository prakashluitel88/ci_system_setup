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
        $this->load->model('login_m');
        
        $this->load->helper('form');
    }

    public function index() {
        // Load our view to be displayed
        // to the user
        $this->load->view('login_v');
    }

    public function process() {
        //redirect('dash');
        // Load the model
        
        // Validate the user can login
        $result = $this->login_m->validate();
        // Now we verify the result
        if (!$result) {
            // If user did not validate,

            echo "0";
        } else {

            // If user did validate, 
            echo "1";
        }
    }

    public function logout() {
        $login_id = $this->session->userdata('userId');
        
        $login_disable = $this->login_m->disablelogin($login_id);
        if($login_disable)
        {
        $this->session->sess_destroy();
        redirect($this->index());
        } else {
            redirect('dash');
        }
    }

}

?>