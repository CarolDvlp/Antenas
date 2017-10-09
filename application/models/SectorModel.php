<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SectorModel extends CI_Model {

	public function insertSector($sectorData){
		$this->db->insert('Sector', $sectorData); 
		
		if ($this->db->affected_rows() == 1) {
			return true;
		}
		return false;
	}

	public function doListSectors(){
		$this->db->select("*");
		$this->db->from("Sector");
		$query = $this->db->get();
		return $query->result();
	}

}