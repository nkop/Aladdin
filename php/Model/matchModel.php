<?php
/*
 * @author: Jarric van Krieken
 */

include "wish.class.php";
include "tag.class.php";
include "talent.class.php";
include "match.class.php";

class MatchModel {
	//database connection
	function getConnection() {
		require_once 'DB/Database.class.php';
		$db = Database::getInstance();
		$sql = $db->getConnection();
		return $sql;
	}
	
	// get all by admin accepted user talents of a user
	function getAcceptedUserTalents($userName) {
		$mysqli = $this->getConnection();
		$talentArray = array();
	
		if(isset($userName)){
			$sql_query = "select talent.talenttekst,status.status,talent.talentid
			from talent
			left join account on account.accountid = talent.account
			left join status on status.statusid = talent.status
			where account.gebruikersnaam= '$userName' and status.statusid=6";
				
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
	}

	// calculate all possible matches for one user
	function getPossibleMatches($userName) {
		$possibleMatches = Array();
		$wishArray = $this->getAllWishes($userName);

		$talentArray = $this->getAcceptedUserTalents($userName);
		$existingMatchesArray = $this->getAllMatches($userName);
		foreach ($talentArray as $talent) {

			foreach ($wishArray as $wish){
				foreach ($talent->talentTags as $tag){
					if(in_array($tag, $wish->tags)){
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
								if($existingMatch->wish->wishid == $match->wish->wishid
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
							array_push($possibleMatches, $match);
							break;
						}
						
					}
				}				
			}
		}
		return $possibleMatches;
	}
	
	// get all wishes of one user to prevent a match with a talent and wish of the same user
	function getAllWishes($userName) {
		$mysqli = $this->getConnection();
		$wishArray = array();
		if(isset($userName)){
			$sql_query = "select wens.tekst,status.status,wens.wensenid
			from wens
			left join status on wens.status = status.statusid
			left join account on wens.plaatser = account.accountid
			where account.gebruikersnaam != '$userName' and status.statusid=6";
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
	}
	
	//get all matches that are linked to the user
	function getAllMatches($userName) {
		$mysqli = $this->getConnection();
		$matchArray = array();
		if(isset($userName)){
			$sql_query = "SELECT m.wensenid,m.talentid,m.status
							FROM `match` as m left join talent as t on m.talentid = t.talentid 
							where t.account = (select accountid from account where gebruikersnaam = '$userName')";

			
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
	}
	
	// insert a match that is a possible match
	function insertMatch($talentId,$wishId){
		$mysqli = $this->getConnection();
		$talentId = $mysqli->real_escape_string ( $talentId );
		$wishId = $mysqli->real_escape_string ( $wishId );
		$query = "insert into `match`(wensenid,talentid) values($wishId,$talentId)";
		return $mysqli->query ( $query );
	}
	
	// insert a match that is declined by the user so it will not appear again
	function insertDeclinedMatch($talentId,$wishId){
		$mysqli = $this->getConnection();
		$talentId = $mysqli->real_escape_string ( $talentId );
		$wishId = $mysqli->real_escape_string ( $wishId );
		$query = "insert into `match`(wensenid,talentid,status) values($wishId,$talentId,5)";
		return $mysqli->query ( $query );
	}
	
}

?>