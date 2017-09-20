<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("UserModel");
	}

	public function index(){
		$this->load->view('login');
	}

	/*
	*@POST
	*$userData = json generado por angular mediante su método $http.post
	*/
	public function doLogin(){
		$userData = json_decode(file_get_contents("php://input"));
		if(isset($userData)){
			$result = $this->UserModel->checkUser($userData);
			if($result['exists']){
				$user_session = array(
					'name'=> $result['name'],
					'logged_in' => true
				);
				$this->session->set_userdata($user_session);
				$this->output->set_status_header(200);
				$this->output->set_content_type('application/json', 'utf-8');
				echo json_encode(array('url' => base_url() . 'index.php/home'));
			}else{
				$this->output->set_status_header(404);
				$this->output->set_content_type('application/json', 'utf-8');
				echo json_encode(array('message' => "Datos incorrectos"));
			}
		}
		
	}




	

}
