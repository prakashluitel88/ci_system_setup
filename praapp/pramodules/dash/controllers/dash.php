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
        $this->check_isvalidated();
        
        $this->lang->load('dash/dash');
        $this->load->model(array('dash_m', 'common/common_m'));
    }

    public function index() {        
        $data['page_title'] = 'Dashboard';
        $data['page_view'] = 'dash/dash_v';
        
        $data['chat_details'] = $this->common_m->getAll('message');
        $data['last_msg_id'] = $this->common_m->getLast('message');
        
        $this->load->view('common/common_v', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }
    public function insert(){
        $user_id = $this->session->userdata('userid');
        $user_name = $this->session->userdata('username');
        
        //get the ajax input post data
        $message = $this->input->post('message');
        $post_time = $this->input->post('current_time');
        if($message != ""){
            $data = array('user_id'=>$user_id,'user_name'=>$user_name,'message'=>$message,'post_time'=>$post_time);
            
            if ($this->dash_m->create($data)) {
            echo "Success";
            } else {
                echo "failed";
            }
        }
    }
    
    public function getChat(){
        $lastId = $this->input->post('last_chat_id');
        
        if($lastId){
            $get_data = $this->dash_m->getLatest($lastId);
            
            if(!empty($get_data))
                echo '1';
            else 
                echo '0';
    }
        
    }
}

?>