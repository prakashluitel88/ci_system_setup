<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */

class Role extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model(array('user/role_m', 'common/common_m'));
        //$this->check_isvalidated();
    }

    public function index() {
        $data['page_title'] = 'Role';
        $data['page_view'] = 'user/role_v';
        
        $data['groups'] = $this->common_m->getAll('prak_group');        
        $data['roles'] = $this->common_m->getAll('prak_role');
        
        $this->load->view('common/common_v', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }
    
    public function create() {
        $data = $_POST;
        $insert_id = $this->common_m->insert('prak_role', $data);
        
        if ($this->role_m->create($data)) {
            return TRUE;
        }        
        
        return FALSE;
    }

}

?>