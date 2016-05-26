<?php
/*
 * @author Ferry Zijlmans
 * */


class UserLoginHandler{
	//declare
	private $login="", $username="",$password="";
	
	public function __construct() {
		include_once '../../Model/DB/Database.class.php';
		include_once '../../Model/userLoginModel.php';
		if (isset($_POST['login'])){
			$this->login = $_POST['login'];
			if (isset($_POST['username']) && isset($_POST['password'])){
				$this->username = $_POST['username'];
				$this->password = $_POST['password'];
				$this->pass();	
			}
		}
	}

	function pass(){
		//create the model object and try to login
		$loginModel = new UserLoginModel();
		if($loginModel->login($this->username,$this->password) == 0){
			header('Location: ../../index.php?controller=personalInfo&action=Index');
		}
		
		else if ($loginModel->login($this->username,$this->password) == 1){
			header('Location: ../../index.php?controller=login&action=Ban&id='.$_POST['username']);
		}
		
		else {
			header('Location: ../../index.php?controller=login&action=Login&id='.$_POST['username']);
		}
	}
}
//call own class(direct from the href/post)
$login = new UserLoginHandler();
?>