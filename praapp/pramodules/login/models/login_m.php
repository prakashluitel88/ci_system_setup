<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Login model class
 */

class Login_m extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function validate() {
        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('username','username','required');
        //$this->form_validation->set_rules('password','password','required');
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $password = (hash('sha512', $password));
        //print_r($password);die();
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // Run the query
        $query = $this->db->get('prak_user');
        
        // Let's check if there are any results
        if ($query->num_rows == 1) {
            // If there is a user, then create session data
            $user = $query->row();
            $userDetails = $this->common_m->getById('prak_user_group','user_id',$user->id);
            $data = array(
                //Set UserId
                'userId' => $user->id,
                //Set UserName
                'username' => $user->username,
                //First Name
                //'fname' => $user->fname,
                //Roles
                
                // Set Group Id
                'groupId' => $userDetails->group_id,
                // Set Role Id
                'roleId' => $userDetails->role_id,
                
                'validated' => true
            );
            $this->session->set_userdata($data);
            
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

}

?>