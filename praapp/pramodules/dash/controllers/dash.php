<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */

class Dash extends MY_Controller {

    function __construct() {
        parent::__construct();
        //$this->check_isvalidated();
    }

    public function index() {
        $this->load->view('dash_v');
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }

}

?>