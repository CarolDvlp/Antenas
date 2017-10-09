<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antenna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('/login');
		}
		$this->load->model("AntennaModel");
	}

	public function index(){
		$this->load->view('home');
	}

	public function doCreateAntenna(){
		$antennaData = json_decode(file_get_contents("php://input"));
		if(isset($antennaData)){
			if($this->AntennaModel->insertAntenna($antennaData)){
				$this->output->set_status_header(200);
				$this->output->set_content_type('application/json', 'utf-8');
				echo json_encode(array('successMessage' => "La nueva antena ha sido guardada."));
			}else{
				$this->output->set_status_header(500);
				echo json_decode(array('errorMessage' => "La nueva antena no se ha podido guardar"));
			}
		}
			
	}

}