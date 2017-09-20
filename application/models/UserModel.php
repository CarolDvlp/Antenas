<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function checkUser($userData){
		$username = $userData->username;
		$pass = $userData->pass;
		
		$return = array('exists' => false);

		if($username == "carol" && $pass == "1234"){
			$return['exists'] = true;
			$return['name'] = "Carol Aceituno";
		}
		return $return;
	}

}