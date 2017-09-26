<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function checkUser($userData){
		$username = $userData->username;
		$pass = $userData->pass;
		$return = array('exists' => false);

		$this->db->select('idUsuario');
		$this->db->select('nombre');
		$this->db->select('clave');
		$this->db->select('idPerfil');
		$this->db->from('Usuario');
		$this->db->where('nombre', $username);
		$row = $this->db->get()->row();

		if(isset($row)){
			if ($row->clave == $pass) {
				$return['exists'] = true;
				$return['name'] = $row->nombre;
			}
		}

		return $return;
		/*if($username == "carol" && $pass == "1234"){
			$return['exists'] = true;
			$return['name'] = "Carol Aceituno";
		}
		return $return;*/
	}

}