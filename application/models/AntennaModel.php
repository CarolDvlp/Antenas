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
		$this->db->select("*");
		$this->db->from("Antenna");
		$query = $this->db->get();
		return $query->result();
	}

	public function doDeleteAntennas(){
		$this->db->delete('Antenna', array('antennaId','$antennaId'));
		
	}
}