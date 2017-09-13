<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model {
	public function create($data){
		$this->db->insert('Usuario', $data);
		if($this->db->affected_rows() == 1){
			return true;
		}
		return false;
	}
}