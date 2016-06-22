<?php
/*
 * @author Ferry Zijlmans
 * */

class UserLoginModel {
	function Login ($email, $password){
		include_once 'password.php';
		//login and create session
		$db = Database::getInstance();
		$sql = $db->getConnection();
		
		//prevent sql injection
		$safe_email = mysqli_real_escape_string($sql, $email);
		$safe_password = mysqli_real_escape_string($sql, $password);
		
		//$query = "select * from account where email='$safe_email' AND wachtwoord='$hashed_password'";
		$query = "select gebruikersnaam, wachtwoord, rechten from account where email='$safe_email'";
		$result = mysqli_query($sql, $query);
		
		while ( $row = $result->fetch_object () ) {
			$hashed_password=$row->wachtwoord;
			$gebruikersnaam=$row->gebruikersnaam;
 			$rechten=$row->rechten;
			
		}
		//$run_user = mysqli_query($sql, $query);
		//$check_user = mysqli_num_rows($run_user);
		if(password_verify($safe_password, $hashed_password) && $rechten != 4){
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['userName']=$gebruikersnaam;
			$query = "select accountid from account where gebruikersnaam = '$gebruikersnaam'";
			$result = $sql->query ( $query );
			$_SESSION['user_id'] = $result->fetch_row()[0];
			return 0;
			
		}
		else if ($rechten == 4){
			return 1;
		}
		else{
			return 2;
		}
	}
	function isAutenticated(){
		
	}
}
?>