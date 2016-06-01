<?php
/*
 * @author Niels Kop
 */
include_once '/../DB/Database.class.php';
class MatchesModel {
	// gathers all the matchids, wishes and talents from matches that haven't been approved yet
	function GatherData() {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "SELECT m.matchid as matchID, w.tekst as wish, t.talenttekst as talent FROM `match` as m 
					JOIN `wens` as w ON m.wensenid = w.wensenid
					JOIN `talent` as t ON m.talentid = t.talentid
					WHERE m.status = 1";
		$result = $sql->query ( $query );
		return $result;
	}
	// accepts a match by setting the status to 2: accepted
	function AcceptMatch($matchid) {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$wensid = $sql->query ( "SELECT wensenid FROM `match` WHERE matchid = '$matchid'" );
		$talentid = $sql->query ( "SELECT talentid FROM `match` WHERE matchid = '$matchid'" );
		foreach ( $talentid as $item ) {
			$talentid = $item ["talentid"];
		}
		foreach ( $wensid as $item ) {
			$wensid = $item ["wensenid"];
		}
		$updatewens = $sql->query ( "UPDATE `wens` SET `status` = 2 WHERE wensenid = '$wensid'" );
		$updatetalent = $sql->query ( "UPDATE `talent` SET `status` = 2 WHERE talentid = '$talentid'" );
		
		$query = "UPDATE `match` SET `status` = 2 WHERE matchid = '$matchid'";
		return $sql->query($query);
	}
	// declines a match by setting the status to 3: declined
	function DeclineMatch($matchid) {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "UPDATE `match` SET `status` = 3 WHERE matchid = '$matchid'";
		return $sql->query ( $query );
	}
	
	function generateMatches(){
		$possibleMatches = $this->getPossibleMatches();
		
		
	}
	
	function getPossibleMatches() {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$foundMatch = false;
		$possibleMatches = Array();
		$wishArray = $this->getAllWishes();
		$talentArray = $this->getAcceptedUserTalents();
		$existingMatchesArray = $this->getAllMatches();
		
		foreach ($talentArray as $talent) {
			$tagCounter = 0;
			foreach ($wishArray as $wish){
				foreach ($talent->talentTags as $tag){
					if(in_array($tag, $wish->tags)){
						$tagCounter++;
					}
					if($tagCounter==2) {
						$match = new Match();
						$match->talent = $talent;
						$match->wish = $wish;
						$counter =0;
						if($existingMatchesArray !=null){
							foreach ($existingMatchesArray as $existingMatch){
								if($existingMatch->talent->talentId == $match->talent->talentId
										&& $existingMatch->status == 1 ){
											$counter++;
											break;
								}
								if(($existingMatch->talent->talentId == $match->talent->talentId
										&& $existingMatch->wish->wishid == $match->wish->wishid)) {
											$counter++;
											break;
										}
							}
						}
						if($counter==0){
							insertPossibleMatch($match->talent->talentId,$match->wish->wishid);
							$foundMatch = true;
							break;
						}
		
					}
					if($foundMatch){
						break;
					}
				}
				if($foundMatch){
					break;
				}
			}
			if($foundMatch){
				break;
			}
		}
		if($foundMatch){
			getPossibleMatches();
		}
	}
	
	function getAllWishes() {
		$mysqli = $this->getConnection();
		$wishArray = array();

		$sql_query = "select wens.tekst,status.status,wens.wensenid
		from wens
		left join status on wens.status = status.statusid
		left join account on wens.plaatser = account.accountid
		where status.statusid=6";
		$result = $mysqli->query($sql_query);

		while ( $row = $result->fetch_object () ) {
			$wish = new Wish();
			$wish->wishtext = $row->tekst;
			$wish->wishstatus = $row->status;
			$wish->wishid = $row->wensenid;

			$sql_query = "select tag.tagnaam,tag.tagid from tag left join wens_has_tag on tag.tagid = wens_has_tag.tag_tagid where wens_wensenid = $wish->wishid";
			$tagsResult = $mysqli->query($sql_query);

			$tagArray = Array();
			while ( $row = $tagsResult->fetch_object () ) {
				$tag = new Tag();
				$tag->tagId = $row->tagid;
				$tag->tagName = $row->tagnaam;

				array_push($tagArray, $tag);
			}

			$wish->tags = $tagArray;
			array_push($wishArray, $wish);
		}
		$result->close();
		return $wishArray;
		
	}
	
	function getUserTalents() {
		$mysqli = $this->getConnection();
		$talentArray = array();
	
		$sql_query = "select talent.talenttekst,status.status,talent.talentid
		from talent
		left join account on account.accountid = talent.account
		left join status on status.statusid = talent.status
		where  status.statusid=1 or status.statusid=6";
			
		$result = $mysqli->query($sql_query);

		while ( $row = $result->fetch_object () ) {
			$talent = new Talent();
			$talent->talentText = $row->talenttekst;
			$talent->talentStatus = $row->status;
			$talent->talentId = $row->talentid;

			$sql_query = "select tag.tagnaam,tag.tagid from tag left join talent_has_tag on tag.tagid = talent_has_tag.tag_tagid where talent_talentid = $talent->talentId";
			$tagsResult = $mysqli->query($sql_query);

			$tagArray = Array();
			while ( $row = $tagsResult->fetch_object () ) {
				$tag = new Tag();
				$tag->tagId = $row->tagid;
				$tag->tagName = $row->tagnaam;
					
				array_push($tagArray, $tag);
			}

			$talent->talentTags = $tagArray;
			array_push($talentArray, $talent);
		}
		$result->close();
		return $talentArray;
		
	}
	
	function getAllMatches() {
		$mysqli = $this->getConnection();
		$matchArray = array();
			$sql_query = "SELECT m.wensenid,m.talentid,m.status
			FROM `match` as m left join talent as t on m.talentid = t.talentid";
	
				
			$result = $mysqli->query($sql_query);
			while ( $row = $result->fetch_object () ) {
				$match = new Match();
				$talent = new Talent();
				$wish = new Wish();
	
				$talent->talentId = $row->talentid;
				$wish->wishid = $row->wensenid;
	
				$match->talent = $talent;
				$match->wish = $wish;
				$match->status=$row->status;
	
				array_push($matchArray, $match);
			}
			$result->close();
			return $matchArray;
	}
	
	function insertPossibleMatch($talentId,$wishId){
		$mysqli = $this->getConnection();
		$talentId = $mysqli->real_escape_string ( $talentId );
		$wishId = $mysqli->real_escape_string ( $wishId );
		$query = "insert into `match`(wensenid,talentid) values($wishId,$talentId)";
		return $mysqli->query ( $query );
	}
	
	function insertPossibleDeclinedMatch($talentId,$wishId){
		$mysqli = $this->getConnection();
		$talentId = $mysqli->real_escape_string ( $talentId );
		$wishId = $mysqli->real_escape_string ( $wishId );
		$query = "insert into `match`(wensenid,talentid,status) values($wishId,$talentId,5)";
		return $mysqli->query ( $query );
	}
}