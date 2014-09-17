<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This module only for imports task.
 *
 * @author crossover
 */
class Dash_m extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->table_name = 'message';
    }
    
    public function create($data) {
        if ($this->common_m->insert($this->table_name, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function getLatest($data) {
        $this->db->select('*');    
        $this->db->from($this->table_name);
        $this->db->where('message_id >', $data);
        $result = $this->db->get();
        
        return $result->result_array();
    }
}
