<?php
/*
 * @author: Jarric van Krieken
 */

include "wish.class.php";
include "tag.class.php";
include "talent.class.php";
include "match.class.php";

class TalentsModel {
	//database connection
	function getConnection() {
		require_once 'DB/Database.class.php';
		$db = Database::getInstance();
		$sql = $db->getConnection();
		return $sql;
	}
	
	// get talents of one user
	function getUserTalents($userName) {		
		$mysqli = $this->getConnection();
		$talentArray = array();
		
		if(isset($userName)){
			$sql_query = "select talent.talenttekst,status.status,talent.talentid 
							from talent 
							left join account on account.accountid = talent.account 
							left join status on status.statusid = talent.status 
							where account.gebruikersnaam= '$userName' and (status.statusid=1 or status.statusid=6)";
			
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
	
	// insert a talent for a user
	function insertTalent($talent,$userName) {
		$mysqli = $this->getConnection();
		$talent = $mysqli->real_escape_string ( $talent );
		$query = "insert into talent(talenttekst,account,status) values('$talent', (select accountid from account where gebruikersnaam = '$userName'),1) ";
		return $mysqli->query ( $query );
	}
	
	// get the wishes that are active of the user
	function getWishAmount($userName) {
		$mysqli = $this->getConnection();
		$count=0;
		
		$sql_query = "select * from wens where plaatser = (select accountid from account where gebruikersnaam = '$userName') and (status=1 or status=6 or status= 2)";
		$result = $mysqli->query($sql_query);
	
		while ( $row = $result->fetch_object () ) {
			$count++;
		}
		$result->close();
		return $count;
	
	}
	
	//get all tags that are active
	function getTags() {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		
		$tagsArray = array();
			$sql_query = "select tagnaam,tagid from tag where status=6";
			$result = $mysqli->query($sql_query);
			
			while ( $row = $result->fetch_object () ) {
				$Tag = new Tag();
				$Tag->tagId = $row->tagid;
				$Tag->tagName = $row->tagnaam;
				array_push($tagsArray, $Tag);
			}
			
			
			$result->close();
			return $tagsArray;
	}
	
	// add a tag to a talent
	function insertTagToTalent($tagid) {
		$mysqli = $this->getConnection();
		$tagid = $mysqli->real_escape_string ( $tagid );
		$query = "insert into talent_has_tag(talent_talentid,tag_tagid) values((SELECT talentid FROM talent ORDER BY talentid DESC limit 1),$tagid)";
		return $mysqli->query ( $query );
	}
	
	// delete a talent
	function deleteTalent($talentId,$userName) {
		$mysqli = $this->getConnection();
		$talentId = $mysqli->real_escape_string ( $talentId );
		$userName = $mysqli->real_escape_string ( $userName );
		
		$query = "select count(*) as aantal from talent where talentid = $talentId and account = (select accountid from account where gebruikersnaam = '$userName')";
		
		$result = $mysqli->query($query);
		$count = 0;	
		while ( $row = $result->fetch_object () ) {
			$count = $row->aantal;
		}
		
		if($count > 0){
			$query = "update `match` set status = 5 where talentid = $talentId and status = 1";
			$mysqli->query ( $query );
			$query = "update talent set status = 5 where talentid = $talentId and account = (select accountid from account where gebruikersnaam = '$userName')";			
			$mysqli->query ( $query );
		}
	}

}

?>