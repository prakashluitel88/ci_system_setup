<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Login controller class
 */

class Browse {

    function __construct() {
        parent::__construct();
        
        //$this->lang = $_GET['lang'];
        //$this->current_url = $_GET['current_url'];
    }
    
    public function index() {
        die('this');
        curl_init();
        $ch = curl_init("http://localhost/ci_system_setup/");
        //$ch = curl_init("http://crossovernepal.com/");
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        
        echo $content;
        
        die('this');
    }

    public function switchLanguage() {
        $segment_to_replace = "/".$this->uri->segment(1)."/";
        $segment_to_place = "/".$this->lang."/";
        $new_url = str_replace ($segment_to_replace, $segment_to_place, $this->current_url);

        redirect ($new_url);
    }
}