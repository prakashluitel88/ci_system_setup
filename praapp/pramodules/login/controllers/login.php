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
    
    public function index() {
        // Load our view to be displayed
        // to the user
        $this->load->view('login_v');
    }

    public function process() {
        //redirect('dash');
        // Load the model
        $this->load->model('login_m');
        // Validate the user can login
        $result = $this->login_m->validate();
        // Now we verify the result
        if (!$result) {
            // If user did not validate, then show them login page again
            //$msg = '<font color=red>Invalid username and/or password.</font><br />';
            //$this->session->set_flashdata('error', $this->lang->line('login_error'));
            echo "0";
            
        } else {            
            echo "1";
            // If user did validate, 
            // Send them to members area
            //redirect('dash');
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect($this->index());
        
    }

}

?>