<?php
include_once '../DB/Database.class.php';

$canPass = false;

if (isset($_POST['login'])){
	//validate form input
	if (isset($_POST['username']) && isset($_POST['password'])){
		$canPass = true;
	}
}
if ($canPass){
	//login and create session
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	$username = mysqli_real_escape_string($sql,$_POST['username']);
	$pass = mysqli_real_escape_string($sql,$_POST['password']);
	
	$query = "select * from account where gebruikersnaam='$username' AND wachtwoord='$pass'";
	
	$run_user = mysqli_query($sql, $query);
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user>0){
		$_SESSION['username']=$username;
		header('Location: ../view/page_personalinfo.php');
	}
	else{
		header('Location: ../view/page_login.php?login=false&username='.$_POST['username']);
	}
}
?>