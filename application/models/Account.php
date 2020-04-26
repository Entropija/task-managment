<?php

namespace application\models;

use application\core\Model;

class Account extends Model {

    public function login($params) {
        
        $result = $this->db->row("SELECT id, is_admin, password FROM users WHERE name = :name", $params );
       
		return $result;
	}
	
}