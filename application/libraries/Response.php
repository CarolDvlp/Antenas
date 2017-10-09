
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Response {
	
	protected $CI;
	public function __construct(){
		$this->CI =& get_instance();
	}
	public function doJson($status, $array){
		$this->CI->output->set_status_header($status);
		$this->CI->output->set_content_type('application/json', 'utf-8');
		echo json_encode($array);		
	}
}
