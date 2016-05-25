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
	function banUser($userID, $banStatus){
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($userID > 0) {
			//status 0 = open, status 1 = blokkeerd
			if ($banStatus != 4){
				$sql_query = "UPDATE `account` SET `rechten` = '4' WHERE `accountid` = ".$userID.";";
			}
			else if ($banStatus == 4){
				$sql_query = "UPDATE `account` SET `rechten` = '2' WHERE `accountid` = ".$userID.";";
			}		
		}
		$mysqli->query($sql_query);	
	}
	
	
}