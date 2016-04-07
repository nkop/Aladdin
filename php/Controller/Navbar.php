<?php
include_once ('Smarty/header.php');

$smarty = new Smarty();
ini_set('session.use_trans_sid', '0');

session_start();

if (isset($_SESSION['email'])){
	if(strlen($_SESSION['email'])> 0){
		$text = "Logout";
	}
	else{
		$text = "Login";
	}
}
else{
	$text = "Login";
	$_SESSION['email'] = "";
}
$smarty->assign('Text', $text);
//$smarty->display('../View/php/NavTop.tpl');
?>