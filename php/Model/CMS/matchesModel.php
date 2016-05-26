<?php
include_once '/../DB/Database.class.php';

class MatchesModel {
	function GatherData() {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "SELECT m.matchid as matchID, w.tekst as wish, t.talenttekst as talent FROM `match` as m 
JOIN `wens` as w ON m.matchid = w.wensenid
JOIN `talent` as t ON m.matchid = t.talentid
WHERE m.status = 1";
		$result = $sql->query ( $query );
	}
	// accepts a match by setting the status to 2: accepted
	function AcceptMatch($matchid){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "UPDATE `match` SET `status` = 2 WHERE matchid = " + $matchid;
		return $sql->query($query);
	}
	// declines a match by setting the status to 3: declined
	function DeclineMatch($matchid){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "UPDATE `match` SET `status` = 3 WHERE matchid = " + $matchid;;
		return $sql->query($query);
	}
}