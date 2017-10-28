<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('/login');
		}
		$this->load->model("SectorModel");
		$this->load->library("response");
	}

	public function doCreateSector(){
		//{"sector": "Valle Hermoso"} = $object->sector;
		//json_decode transforma objecto json a objeto php

		/*******************************************************************************************
		*	El nombre de cada uno de los atributos del objeto deben coincidir con los atributos de *
		*	la tabla en la base de datos. Por ejemplo:											   *
		*	TABLA Sector, Atributo "nombreSector"												   *
		*	Objeto PHP: $sectorData->nombreSector.												   *
		*   Objeto JSon: {"nombreSector": "Valle Hermoso"}                                         *
		********************************************************************************************/

		$sectorData = json_decode(file_get_contents("php://input"));
		if(isset($sectorData)){
			if($this->SectorModel->insertSector($sectorData)){
				$this->response->doJson(200, array('successMessage' => "El nuevo sector ha sido guardado."));
			}else{
				$this->response->doJson(400, array('errorMessage' => "Ocurrió un problema. Inténtalo de nuevo.")); 
			}
		}
	}

	public function doListSectors(){
		$this->response->doJson(200, $this->SectorModel->doListSectors());
	}

	public function doDeleteSector(){
		$sectorId = $this->input->get("sectorId");
		if(isset($sectorId)){
			if($this->SectorModel->doDeleteSector($sectorId)){
				$this->response->doJson(200, array('successMessage' => "El sector ha sido eliminado!"));
			}else{
				$this->response->doJson(409, array('errorMessage' => "Ocurrió un problema. Inténtalo de nuevo.")); 
			}
		}
	}

}