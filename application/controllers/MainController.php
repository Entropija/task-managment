<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		
		$result = $this->model->getTasks();
		$vars = [
			'tasks' => $result,
		];
		$this->view->render('Главная страница', $vars);
	}

	public function editAction() {
		if(isset($_GET['id'])){
			$id = htmlspecialchars(strip_tags($_GET['id']));
			$params = [
				'id' => $id
			];
			$result = $this->model->getTaskForId($params);
			$vars = [
				'tasks' => $result,
			];
			if (!empty($result)){
				$this->view->render('Редактирование задачи', $vars);
			} else{
		//	debug($_SERVER);
				$url = "http://" . $_SERVER['HTTP_HOST'];
				header("Location: $url");
			}
			
		}
	}


	public function updateAction(){
		$edit = htmlspecialchars(strip_tags($_POST['edit']));
		$id = htmlspecialchars(strip_tags($_POST['id']));
		$description = htmlspecialchars(strip_tags($_POST['description']));
		$status = htmlspecialchars(strip_tags($_POST['status']));
		$params = [
			'id' => $id,
			'edit' => $edit,
			'status' => $status,
			'description' =>$description
		];

		$result = $this->model->updateTask($params);
		$url = "http://" . $_SERVER['HTTP_HOST'];
		header("Location: $url");
	}

	public function newAction() {
		$this->view->render('Новая заявка');
	}


	public function addAction(){
		unset($_SESSION['status']);
		if (isset($_POST['name_user']) && isset($_POST['email']) && isset($_POST['description'])){

			$name_user = htmlspecialchars(strip_tags($_POST['name_user']));
			$description = htmlspecialchars(strip_tags($_POST['description']));
			$params = [
				'name_user' => $name_user,
				'email' => $_POST['email'],
				'description' =>$description
			];

			$status = $this->model->newTask($params);
			
			$_SESSION['status'] = $status;
		}
		$url = "http://" . $_SERVER['HTTP_HOST'];
		header("Location: $url");
	}


}