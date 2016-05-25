<?php
/*
 * @author Ferry Zijlmans
*/
class LoginController{	
	private $loginError = false;
	private $banned = false;
	private $username = "";

	//login
	function Login($username){
		//get the global var smarty from index.php
		global $smarty;
		$this->loginError = true;
		$this->username = $username;
		//call the index funtion
		$this->Index($smarty);
	}
	
	function Ban($username){
		//get the global var smarty from index.php
		global $smarty;
		$this->banned = true;
		$this->username = $username;
		//call the index funtion
		$this->Index($smarty);
	}
	
	//logout
	function Logout(){
		if (isset($_SESSION['email'])){
			session_destroy();
			$this->Index(null);
		}
	}
	
	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('username', $this->username);
		$smarty->assign('loginError', $this->loginError);
		$smarty->assign('banned', $this->banned);
		$smarty->display('login.tpl');
	}
	
}
?>