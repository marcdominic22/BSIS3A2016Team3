<?php

class Users_model extends CI_Model {
	public function construct(){
	
		parent::__construct();
		
	}
	
	public function login ($username, $password) {
		$this->db->where('username', $username);
		
		$result = $this->db->get('users');
		$result = $result->result_array();
		
		if ($result[0]['password'] != $password){
			return FALSE;
		}
		return TRUE;
	}
	}