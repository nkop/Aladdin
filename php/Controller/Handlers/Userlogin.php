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
		header('Location: ../personalInfoController.php');
	}
	else{
		header('Location: ../loginController.php?login=false&username='.$_POST['email']);
	}
}
?>