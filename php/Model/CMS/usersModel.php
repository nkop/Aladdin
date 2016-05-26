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
			//rechten 1 = Admin, 2 = Normaal open account, 3 = Inactief, 4 = Geblokkeerd
			//Checks if Account is Blocked, If blocked or inactief make "open", if account is open makes it banned
			if ($banStatus != 4){
				if ($banStatus == 3){
					$sql_query = "UPDATE `account` SET `rechten` = '2' WHERE `accountid` = ".$userID.";";
				}
				else{
				$sql_query = "UPDATE `account` SET `rechten` = '4' WHERE `accountid` = ".$userID.";";
				}
			}
			else if ($banStatus == 4){
				$sql_query = "UPDATE `account` SET `rechten` = '2' WHERE `accountid` = ".$userID.";";
			}		
		}
		$mysqli->query($sql_query);	
	}
	
	
}