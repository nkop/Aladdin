<?php
class WishesModel{
	function getOpenWishes()
	{
		$wisharray = array();
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		// status 1 = open
		$sql_query = "select * from wens where status = 1";
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			array_push($wisharray, $row);
		}
	
		return $wisharray;
	}
	
	function acceptWish($wishID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($wishID > 0) {
			// status 6 = accepted
			$sql_query = "UPDATE `wens` SET `status` = '6' WHERE `wensenid` = ".$wishID.";";
		}
		$mysqli->query($sql_query);
	}
	
	function declineWish($wishID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($wishID > 0) {
			// status 5 = declined
			$sql_query = "UPDATE `wens` SET `status` = '5' WHERE `wensenid` = ".$wishID.";";
		}
		$mysqli->query($sql_query);
	}
}
