<?php

//if (!defined('BASEPATH'))
    //exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */

class Group extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->lang->load('dash/dash');
        $this->lang->load('group/group');
        $this->load->model(array('user/group_m', 'common/common_m'));
        //$this->check_isvalidated();
    }

    public function index() {
        $data['page_title'] = 'Group';
        $data['page_view'] = 'user/group_v';
        
        $data['groups'] = $this->common_m->getAll('prak_group');
        
        $this->load->view('common/common_v', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }
    
    public function create() {
        $data = $_POST;
        
        if ($this->group_m->create($data)) {
            return TRUE;
        }
        
        return FALSE;
    }

}

?>