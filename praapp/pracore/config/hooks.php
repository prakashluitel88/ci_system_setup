<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */
if ( ! function_exists('current_url'))
{
	function current_url()
	{
        $CI =& get_instance();
        
        $curr_url  = substr($CI->uri->uri_string(), 3);
		
		return $CI->config->site_url($curr_url);
	}
}