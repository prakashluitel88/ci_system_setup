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
        
        $this->lang->load(array('dash/dash', 'group/group', 'role/role','user/user'));
        $this->load->model(array('user/user_m', 'common/common_m'));
        //$this->check_isvalidated();
    }

    public function index() {
        $data['page_title'] = 'User';
        $data['page_view'] = 'user/user_v';
        
        $data['groups'] = $this->common_m->getAll('prak_group');
        $data['roles'] = $this->common_m->getAll('prak_role');
        //$data['users'] = $this->common_m->getAll('prak_user');
        $data['users'] = $this->user_m->joinByGroup();
        //print_r($data['users']);die();
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
            <select name="role_id" id="role_id" class="form-control" <?php if(!$role){?>disabled="disabled"<?php }?>>
                <option value="choose_role"><?php echo lang('choose_role');?></option>
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
        $password = (hash('sha512', $password));
        
        $user_form = array(
                                'username'=> $username,
                                'username_canonical'=>NULL,
                                'email'=>NULL,
                                'email_canonical'=>NULL,
                                'enabled'=>'0',
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
                                'roles' => 'roles'
                            );
        
        
        $id = ($this->common_m->insert('prak_user', $user_form));
        if($id){
            $user_group_form = array('user_id'=> $id,
                                    'group_id'=>$groupId,
                                    'role_id'=>$roleId,);
            if ($this->user_m->create($user_group_form))
                return TRUE;
            else 
                return FALSE;                
        } 
        else {
            return FALSE;
        }
    }

}

?>