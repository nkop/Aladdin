<?php
/*
 * @author Wouter van de Ven
 */
include_once '/../DB/Database.class.php';

class RegistrationModel{
	
	function getOpenRegistrations()
	{
		$registrationarray = array();
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		// status 1 = open
		$sql_query = "select * from account where status = 1";
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			array_push($registrationarray, $row);
		}
	
		return $registrationarray;
	}
	
	// ** ACCEPT **
	function acceptRegistration($accountID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($accountID > 0) {
			// status 6 = accepted
			$sql_query = "UPDATE `account` SET `status` = '6' WHERE `accountid` = ".$accountID.";";
		}
		$mysqli->query($sql_query);
	}
	
	// ** DECLINE **
	function declineRegistration($accountID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($accountID > 0) {
			// status 5 = declined
			$sql_query = "UPDATE `account` SET `status` = '5' WHERE `accountid` = ".$accountID.";";
		}
		$mysqli->query($sql_query);
	}
}
