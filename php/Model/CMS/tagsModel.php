<?php
class TagsModel{
	function getOpenTags()
	{
		$tagarray = array();
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		// status 1 = open
		$sql_query = "select * from tag where status = 1";
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			array_push($tagarray, $row);
		}
	
		return $tagarray;
	}
	
	function acceptTag($tagID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($tagID > 0) {
			// status 6 = accepted
			$sql_query = "UPDATE `tag` SET `status` = '6' WHERE `tagid` = ".$tagID.";";
		}
		$mysqli->query($sql_query);
	}
	
	function declineTag($tagID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($tagID > 0) {
			// status 5 = declined
			$sql_query = "UPDATE `tag` SET `status` = '5' WHERE `tagid` = ".$tagID.";";
		}
		
	}
	
	function addTag($tagName)
	{
		$db = Database::getInstance ();
		$mysqli = $db->getConnection();		
		$tagName = $mysqli->real_escape_string ( $tagName );	
		$query = "INSERT INTO `tag`(`tagnaam`, `status`) VALUES ('$tagName', '1')";
		$mysqli->query($query);
	}
}
