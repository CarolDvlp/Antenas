<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function checkUser($userData){
		$userName = $userData->userName;
		$userPass = $userData->userPass;
		$return = array('exists' => false);

		$this->db->select('userId');
		$this->db->select('userName');
		$this->db->select('userPass');
		$this->db->select('profileId');
		$this->db->from('User');
		$this->db->where('userName', $userName);
		$row = $this->db->get()->row();

		if(isset($row)){
			if ($row->userPass == $userPass) {
				$return['exists'] = true;
				$return['userName'] = $row->userName;
				$return['userId'] = $row->userId;
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