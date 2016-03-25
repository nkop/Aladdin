<?php
function login ($email, $password){
	//login and create session
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	//prevent sql injection
	$safe_email = mysqli_real_escape_string($sql, $email);
	$safe_password = mysqli_real_escape_string($sql, $password);
	
	//$query = "select * from account where email='$safe_email' AND wachtwoord='$hashed_password'";
	$query = "select wachtwoord from account where email='$safe_email'";
	$result = mysqli_query($sql, $query);
	$hashed_password = mysqli_fetch_object($result)->wachtwoord;
	
	
	//$run_user = mysqli_query($sql, $query);
	//$check_user = mysqli_num_rows($run_user);
	if(password_verify($safe_password, $hashed_password)){
		session_start();
		$_SESSION['email']=$email;
		return true;
	}
	else{
		return false;
	}
}

?>