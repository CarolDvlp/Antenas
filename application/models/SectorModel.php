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

	public function doDeleteSector($sectorId){

		$returnValue = false;
		$this->db->where("sectorId", $sectorId);		
		$this->db->select("ip");
		$this->db->from("Antenna");

		if($this->db->get()->row() == null){
			$this->db->where('sectorId', $sectorId );
			$this->db->delete('Sector');
			if($this->db->affected_rows() == 1){
				$returnValue = true;
			}
		}

		return $returnValue;
	}

}