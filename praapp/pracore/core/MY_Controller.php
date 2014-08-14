<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

// Extended CI_Controller, Basic Universal Tasks
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // CI instance created
        $this->CI = &get_instance();
        $language = $this->CI->config->config['language'];
        
        // Base Url Modification on the basis of language
        if ($language == '' || $language == 'english') {
            $this->config->set_item('base_url', $this->CI->config->config['base_url'] . 'en/');
        } elseif($language == 'japan') {
            $this->config->set_item('base_url', $this->CI->config->config['base_url'] . 'jp/');
        } else {
            $this->config->set_item('base_url', $this->CI->config->config['base_url'] . 'fr/');
        }
    }

}
