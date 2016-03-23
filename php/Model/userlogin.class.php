<?php
function login ($email, $password){
	//login and create session
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	//prevent sql injection
	$safe_email = mysqli_real_escape_string($email);
	$safe_password = mysqli_real_escape_string($password);
	
	$query = "select * from account where email='$safe_email' AND wachtwoord='$safe_password'";
	
	$run_user = mysqli_query($sql, $query);
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user==1){
		session_start();
		$_SESSION['email']=$email;
		return true;
	}
	else{
		return false;
	}
}

?>