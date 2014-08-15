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
        $data['page_title'] = 'Dashboard';
        $data['page_view'] = 'dash/dash_v';
        
        $this->load->view('common/common_v', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }

}

?>