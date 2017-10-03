<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SectorModel extends CI_Model {

	public function insertSector($sectorData){
		$this->db->insert('Sector', $sectorData); 
	}

}