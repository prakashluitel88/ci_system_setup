<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This module only for imports task.
 *
 * @author crossover
 */
class User_m extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->table_user = 'prak_user';
        $this->table_group = 'prak_user_group';
    }
    
    public function create($data) {
        if ($this->common_m->insert($this->table_group, $data)) {
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function joinByGroup() {
        $this->db->select('*');
        $this->db->from($this->table_user);
        $this->db->join($this->table_group,'prak_user_group.user_id = prak_user.id');
        
        $query = $this->db->get(); 
        return $query->result();
    }
}
