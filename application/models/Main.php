<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getTasks() {
		$result = $this->db->row('SELECT id,  name_user, email, description, status, edit FROM tasks');
		return $result;
	}


	public function newTask($params) {
		$result = $this->db->insert("INSERT INTO tasks (name_user, email, description) VALUES (:name_user, :email, :description)", $params);
		return $result;
	}

	public function updateTask($params) {
		$result = $this->db->insert("UPDATE tasks SET  description = :description, status = :status, edit = :edit  WHERE id = :id", $params);
		return $result;
	}


	public function getTaskForId($params) {
		
		$result = $this->db->row('SELECT id,  name_user, email, description, status, edit FROM tasks WHERE id=:id', $params);
		return $result;
	}



	
}