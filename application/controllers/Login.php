<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in')){
			redirect('/home');
		}
		$this->load->model("UserModel");
		$this->load->library("response");
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
					'userName'=> $result['userName'],
					'userId'=> $result['userId'],
					'logged_in' => true
				);
				$this->session->set_userdata($user_session);
				$this->response->doJson(200, array('url' => base_url() . 'index.php/home'));
			}else{
				$this->response->doJson(400, array('message' => "Datos incorrectos"));
			}
		}
		
	}




	

}
