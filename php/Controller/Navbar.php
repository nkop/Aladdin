<?php
include_once ('Smarty/header.php');

ini_set('session.use_trans_sid', '0');

$loginoptions = true; 

session_start();
if (isset($_SESSION['email'])){
	if(strlen($_SESSION['email'])> 0){
		$text = "Logout";
		$loginoptions = false;
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
$smarty->assign('loginoptions', $loginoptions);
//$smarty->display('../View/php/NavTop.tpl');
?>