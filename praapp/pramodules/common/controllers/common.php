<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Login controller class
 */

class Common extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->lang = $_GET['lang'];
        $this->current_url = $_GET['current_url'];
    }

    public function switchLanguage() {
        $segment_to_replace = "/".$this->uri->segment(1)."/";
        $segment_to_place = "/".$this->lang."/";
        $new_url = str_replace ($segment_to_replace, $segment_to_place, $this->current_url);

        redirect ($new_url);
    }
}