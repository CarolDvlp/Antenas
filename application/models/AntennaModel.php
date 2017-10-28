<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AntennaModel extends CI_Model {

	public function insertAntenna($antennaData){
		$this->db->insert('Antenna', $antennaData); 

		
		if ($this->db->affected_rows() == 1) {
			return true;
			echo "Se guardó";
		}
		return false;
	}

	public function doListAntennas(){
		$this->db->select("antennaId");
		$this->db->select("name");
		$this->db->select("pass");
		$this->db->select("ssid");
		$this->db->select("trademark");
		$this->db->select("model");
		$this->db->select("ip");
		$this->db->select("mac");
		$this->db->select("gain");
		$this->db->select("channel");
		$this->db->select("latitude");
		$this->db->select("longitude");
		$this->db->select("Sector.sector");
		$this->db->join("Sector", "Antenna.sectorId = Sector.sectorId");
		$this->db->from("Antenna");

		$query = $this->db->get();
		return $query->result();
	}

	public function doDeleteAntenna($antennaId){
		$returnValue = false;
		$this->db->where("antennaId", $antennaId);
		$this->db->delete('Antenna');
		if($this->db->affected_rows() == 1){
			$returnValue = true;
		}
		return $returnValue;
	}
}