<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('/login');
		}
		$this->load->model("SectorModel");
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
			$this->SectorModel->insertSector($sectorData);
		}
	}

}