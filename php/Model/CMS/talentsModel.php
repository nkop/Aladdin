<?php
include "Model/talent.class.php";

class TalentsModel{
	function getOpenTalents()
	{
		$talentarray = array();
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		// status 1 = open
		$sql_query = "select * from talent where status = 1";
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			array_push($talentarray, $row);
		}
	
		return $talentarray;
	}
	
	function acceptTalent($talentID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($talentID > 0) {
			// status 6 = accepted
			$sql_query = "UPDATE `talent` SET `status` = '6' WHERE `talentid` = ".$talentID.";";
		}
		$mysqli->query($sql_query);
	}
	
	function declineTalent($talentID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($talentID > 0) {
			// status 5 = declined
			$sql_query = "UPDATE `talent` SET `status` = '5' WHERE `talentid` = ".$talentID.";";
		}
		$mysqli->query($sql_query);
	}
	
	function getTags($talentID)
	{
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		$tagArray = array();
		$sql_query = "select * from talent_has_tag where talent_talentid = ".$talentID;
		$result = $mysqli->query ( $sql_query );
		while ( $row = $result->fetch_object () ) {
			$sql_query2 = "select * from tag where tagid = " . $row->tag_tagid;
			$result2 = $mysqli->query ( $sql_query2 );
			
			while ( $row2 = $result2->fetch_object () ) {
			array_push ( $tagArray, $row2->tagnaam);
			}			
		}	
		
		return $tagArray;
	}
}

