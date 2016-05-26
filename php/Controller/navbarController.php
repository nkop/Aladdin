<?php
include_once ('Smarty/header.php');
include ('Model/DB/Database.class.php');
ini_set('session.use_trans_sid', '0');

$loginoptions = true; 
$isAdmin = false;
session_start();
if (isset($_SESSION['email'])){
	if(strlen($_SESSION['email'])> 0){
		$text = "Logout";
		$loginoptions = false;
		$isAdmin = true;
		$db = Database::getInstance ();
		if($db->CheckAdminByMail($_SESSION['email'])){
			$isAdmin = true;
		}

	}
	else{
		$text = "Login";
	}
}
else{
	$text = "Login";
	$_SESSION['email'] = "";
}
$smarty->assign('text', $text);
$smarty->assign('isAdmin', $isAdmin);
$smarty->assign('loginoptions', $loginoptions);
//$smarty->display('../View/php/NavTop.tpl');
?>