<?php
include_once ('Smarty/header.php');

ini_set('session.use_trans_sid', '0');


class NavBarController{
private $loginoptions = true; 
private $isAdmin = false;
private $text = "";

function Index(){
session_start();
if (isset($_SESSION['email'])){
	if(strlen($_SESSION['email'])> 0){
		$this -> text = "Logout";
		$this->loginoptions = false;
		$this->isAdmin = true;
		$db = Database::getInstance ();
		if($db->CheckAdminByMail($_SESSION['email'])){
			$this->isAdmin = true;
		}

	}
	else{
		$this->text = "Login";
	}
}
else{
	$this->text = "Login";
	$_SESSION['email'] = "";
}
global $smarty;
$smarty->assign('text', $this->text);
$smarty->assign('isAdmin', $this->isAdmin);
$smarty->assign('loginoptions', $this->loginoptions);
//$smarty->display('../View/php/NavTop.tpl');
}
}
?>