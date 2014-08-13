<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

// Extended CI_Controller, Basic Universal Tasks
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        

        // CI instance created
        $this->CI = &get_instance();
        $language = $this->CI->config->config['language'];
        
        $this->CI->session->set_userdata('core_base_url', $this->CI->config->config['base_url']);
        
        // Base Url Modification on the basis of language
        if ($language == '' || $language == 'english') {
            //$this->CI->config->config['base_url'] = $this->CI->config->config['base_url'] . 'en/';
            $this->config->set_item('base_url', $this->CI->config->config['base_url'] . 'en/');
        } else {
            //$this->CI->config->config['base_url'] = $this->CI->config->config['base_url'] . 'fr/';
            $this->config->set_item('base_url', $this->CI->config->config['base_url'] . 'en/');
        }
    }

}
