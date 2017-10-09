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

}