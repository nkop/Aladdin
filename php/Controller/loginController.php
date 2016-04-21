<?php
include ('Smarty/header.php');
include 'navbarController.php';
include 'footerController.php';

$loginError = false;
$username = "";

if (isset($_GET['login']))
{
	$loginError = true;
}
if (isset($_GET['logout'])){
	if (isset($_SESSION['email'])){
		session_destroy();
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$newLink = str_replace(end((explode('?', $actual_link))), "", $actual_link);
		header('Location: '.$newLink);
	}
}

if(isset($_GET['username']))
	$username = $_GET['username'];

$smarty->assign('username', $username);
$smarty->assign('loginError', $loginError);
$smarty->display('login.tpl');

?>