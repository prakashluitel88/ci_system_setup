<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */

class User extends MY_Controller {

    function __construct() {
        parent::__construct();
         $this->load->model(array('user/user_m', 'common/common_m'));
        //$this->check_isvalidated();
    }

    public function index() {
        $data['page_title'] = 'User';
        $data['page_view'] = 'user/user_v';
        
        $data['groups'] = $this->common_m->getAll('prak_group');
        $data['roles'] = $this->common_m->getAll('prak_role');
        $data['users'] = $this->common_m->getAll('prak_user');
        
        $this->load->view('common/common_v', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }
    public function roleList(){
        $id = $this->input->post('id');
        
        $role = $this->common_m->getAll_array('prak_role',NULL,$arr = array('group_id' => $id,));
        
        ?>
            <label>Select Role</label>
            <select name="role_id" id="role_id" class="form-control" <?php if(!$role){?>disabled="disabled"<?php }?>>
                <option value="choose_role">Choose Role</option>
                <?php if($role) { foreach ($role as $row) {?>

                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>                        
                <?php } }?>
            </select>
        <?php
    }
    
    public function create() {
        $groupId = $this->input->post("group_id");
        $roleId = $this->input->post("role_id");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        
        $user_array_form = array(
                                'username'=> $username,
                                'username_canonical'=>NULL,
                                'email'=>NULL,
                                'email_canonical'=>NULL,
                                'enabled'=>'1',
                                'salt'=>NULL,
                                'password' => $password,
                                'last_login'=>NULL,
                                'locked'=>NULL,
                                'expired'=>NULL,
                                'expires_at'=>NULL,
                                'confirmation_token'=>NULL,
                                'password_requested_at'=>NULL,
                                'credentials_expired'=>NULL,
                                'credentials_expire_at'=>NULL,
                                'roles' => $roleId
                            );
        
       
        if ($this->user_m->create($user_array_form)) {
            return TRUE;
        }        
        
        return FALSE;
    }

}

?>