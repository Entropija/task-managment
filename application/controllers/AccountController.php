<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		$this->view->render('Вход');
	}

	public function autorizeAction() {
	
		unset($_SESSION['error']);


		if (isset($_POST['name']) && isset($_POST['password'])){

			$name = htmlspecialchars(strip_tags($_POST['name']));
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$params = [
				'name' => $name,
				
			];

			$result = $this->model->login($params);
			$url = $_SERVER['HTTP_ORIGIN'];
			$urlRepeat = $url."/account/login";
			if (empty($result)){
				$_SESSION['error'] = "Пользователь не зарегистрирован";
				header("Location: $urlRepeat");
			} elseif (!password_verify($_POST['password'], $result[0]['password'])){
				$_SESSION['error'] = "Неправильный логин или пароль";
				header("Location: $urlRepeat");
			} else {
				$_SESSION['id'] = $result[0]['id'];
				$_SESSION['admin'] = $result[0]['is_admin'];
				header("Location: $url");
			}
		
		}

	}

	public function exitAction() {
		unset($_SESSION['id']);
		unset($_SESSION['admin']);
	
		$url = "http://".$_SERVER['HTTP_HOST'];
		header("Location: $url");
	}

}