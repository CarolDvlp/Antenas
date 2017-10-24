<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antenna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('/login');
		}
		$this->load->model("AntennaModel");
		$this->load->library("response");
	}

	public function doCreateAntenna(){
		$antennaData = json_decode(file_get_contents("php://input"));
		if(isset($antennaData)){
			$antennaData->userId = $this->session->userdata('userId');
			if($this->AntennaModel->insertAntenna($antennaData)){
				$this->response->doJson(200, array('successMessage' => "La nueva antena ha sido guardada."));
			}else{
				$this->response->doJson(400, array('errorMessage' => "Ocurrió un problema. Inténtalo de nuevo.")); 
			}
		}
			
	}

	public function doListAntennas(){
		$this->response->doJson(200, $this->AntennaModel->doListAntennas());
	}

	public function doDeleteAntennas(){
		$antennaId = json_decode(file_get_contents("php://input"));
		if(isset($antennaId)){
			$this->AntennaModel->doDeleteAntennas($antennaId);
		}
	}
}