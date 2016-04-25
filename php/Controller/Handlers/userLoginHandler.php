<?php
/*
 * @author Ferry Zijlmans
 * */
include_once '../../Model/DB/Database.class.php';
include_once '../../Model/userLoginModel.php';

class UserLoginHandler{
	//declare
	private $login="", $username="",$password="";
	
	public function __construct() {
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
		if($loginModel->login($this->username,$this->password)){
			header('Location: ../../index.php?controller=personalInfo&action=Index');
		}
		else{
			header('Location: ../../index.php?controller=login&action=Login&id='.$_POST['username']);
		}
	}
}
//call own class(direct from the href/post)
$login = new UserLoginHandler();
?>