<?php
include_once '../../Model/DB/Database.class.php';
include_once '../../Model/userlogin.class.php';

$canPass = false;

if (isset($_POST['login'])){
	//validate form input
	if (isset($_POST['username']) && isset($_POST['password'])){
		$canPass = true;
	}
}
if ($canPass){
	if(login($_POST['username'],$_POST['password'])){
		header('Location: ../../view/page_personalinfo.php');
	}
	else{
		header('Location: ../../view/page_login.php?login=false&username='.$_POST['email']);
	}
}
?>