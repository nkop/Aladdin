<?php
/*
 * @author Wouter van de Ven
 */
include_once '/../DB/Database.class.php';

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
	
	// ** ACCEPT **
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
	
	// ** DECLINE **
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
	
	// function to get tags for a wish
	function getTags($wishID)
	{
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		$tagArray = array();
		$sql_query = "select * from wens_has_tag where wens_wensenid = ".$wishID;
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			$sql_query2 = "select * from tag where tagid = " . $row->tag_tagid;
			$result2 = $mysqli->query ( $sql_query2 );
				
			while ( $row2 = $result2->fetch_object () ) {
				array_push ( $tagArray, $row2->tagnaam);
			}
		}
	
		// return an array with tags
		return $tagArray;
	}
}
