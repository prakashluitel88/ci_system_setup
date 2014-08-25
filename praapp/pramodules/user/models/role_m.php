<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This module only for imports task.
 *
 * @author crossover
 */
class Role_m extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->table_name = 'prak_role';
    }
    
    public function create($data) {
        if ($this->common_m->insert($this->table_name, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
