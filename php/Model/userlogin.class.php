<?php
function login ($email, $password){
	//login and create session
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	$query = "select * from account where email='$email' AND wachtwoord='$password'";
	
	$run_user = mysqli_query($sql, $query);
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user>0){
		session_start();
		$_SESSION['email']=$email;
		return true;
	}
	else{
		return false;
	}
}

?>