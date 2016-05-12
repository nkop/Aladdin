<?php
class UsersModel{
	
	function getUsers()
	{
		$userarray = array();
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
	
		$sql_query = "select * from account";
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			array_push($userarray, $row);
		}
	
		return $userarray;
	
	}
	
}