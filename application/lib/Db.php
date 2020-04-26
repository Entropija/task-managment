<?php

namespace application\lib;

use PDO;

class Db {

	protected $db;
	private $status;
	
	public function __construct() {
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}

	public function query($sql, $params = []) {
		
		$stmt = $this->db->prepare($sql);

		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		
		if ($stmt->execute()) {
				$this->status = "Запись успешно добавлена";
				return $stmt;
		} else{
			$this->status = "Возникли ошибки";
		  }
	}

	public function insert($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $this->status;
	}

	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}


}