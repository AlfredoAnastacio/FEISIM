<?php

class Auth extends CI_Model {

	function __construct(){
		
	}

	public function login($username, $password){
		
		$data = $this->db->get_where('cuenta',array('Usuario' => $username, 'Contrasena' => $password),1);
		
		if (!$data->result()) {
			return false;
		}
		return $data->result();
	}

}
