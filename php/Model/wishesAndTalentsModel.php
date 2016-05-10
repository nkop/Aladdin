<?php

include "wish.class.php";
include "tag.class.php";
include "talent.class.php";

class WishesAndTalentsModel {
	
	function getConnection() {
		require_once 'db/database.class.php';
		$db = Database::getInstance();
		$sql = $db->getConnection();
		return $sql;
	}

	
	function getUserWishes($userName) {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$wishArray = array();
		if(isset($userName)){
			$sql_query = "select wens.tekst,status.status,wens.wensenid from wens left join status on wens.status = status.statusid left join account on wens.plaatser = account.accountid where account.gebruikersnaam= '$userName' and (status.statusid=1 or status.statusid=6)";
			$result = $mysqli->query($sql_query);
	
			while ( $row = $result->fetch_object () ) {
				$wish = new Wish();
				$wish->wishtext = $row->tekst;
				$wish->wishstatus = $row->status;
				$wish->wishid = $row->wensenid;
				
				$sql_query = "select tag.tagnaam from tag left join wens_has_tag on tag.tagid = wens_has_tag.tag_tagid where wens_wensenid = $wish->wishid";
				$tagsResult = $mysqli->query($sql_query);
				
				$tagsLine = "";
				while ( $row = $tagsResult->fetch_object () ) {
					$tagsLine .= $row->tagnaam . ", ";
				}
				
				$tagsLine = substr($tagsLine, 0, -2);
				$wish->tags = $tagsLine;
				array_push($wishArray, $wish);
			}
			$result->close();
			return $wishArray;
		}
	}
	
	function getUserTalents($userName) {		
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
	
		$talentArray = array();
		if(isset($userName)){
			$sql_query = "select talent.talenttekst,talent.status,talent.talentid from talent left join account on account.accountid = talent.account where account.gebruikersnaam= '$userName'";
			$result = $mysqli->query($sql_query);
	
			while ( $row = $result->fetch_object () ) {
				$talent = new Talent();
				$talent->talentText = $row->talenttekst;
				$talent->talentStatus = $row->status;
				$talent->talentId = $row->talentid;
				
				$sql_query = "select tag.tagnaam from tag left join talent_has_tag on tag.tagid = talent_has_tag.tag_tagid where talent_talentid = $talent->talentId";
				$tagsResult = $mysqli->query($sql_query);
				
				$tagsLine = "";
				while ( $row = $tagsResult->fetch_object () ) {
					$tagsLine .= $row->tagnaam . ", ";
				}
				
				$tagsLine = substr($tagsLine, 0, -2);
				$talent->talentTags = $tagsLine;
				array_push($talentArray, $talent);
			}
			$result->close();
			return $talentArray;
		}
	}
	
	function insertWish($wish,$userName) {
		$mysqli = $this->getConnection();
		$wish = $mysqli->real_escape_string ( $wish );
		$date = date("Y-m-d");
		$query = "insert into wens(tekst,plaatser,creatie_datum,status) values('$wish',(select accountid from account where gebruikersnaam= '$userName'),'$date',1) ";
		return $mysqli->query ( $query );
	}
	
	function insertTalent($talent,$userName) {
		$mysqli = $this->getConnection();
		$talent = $mysqli->real_escape_string ( $talent );
		$query = "insert into talent(talenttekst,account,status) values('$talent', (select accountid from account where gebruikersnaam = '$userName'),1) ";
		return $mysqli->query ( $query );
	}
	
	function getWishAmount($userName) {
		$mysqli = $this->getConnection();
		$count=0;
		
		$sql_query = "select * from wens where plaatser = (select accountid from account where gebruikersnaam = '$userName') and (status=1 or status=6)";
		$result = $mysqli->query($sql_query);
	
		while ( $row = $result->fetch_object () ) {
			$count++;
		}
		$result->close();
		return $count;
	
	}
	
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
	
	function insertTagToWish($tagid) {
		$mysqli = $this->getConnection();
		$tagid = $mysqli->real_escape_string ( $tagid );
		$query = "insert into wens_has_tag(wens_wensenid,tag_tagid) values((SELECT wensenid FROM wens ORDER BY wensenid DESC limit 1),$tagid)";
		return $mysqli->query ( $query );
	}
	
	function insertTagToTalent($tagid) {
		$mysqli = $this->getConnection();
		$tagid = $mysqli->real_escape_string ( $tagid );
		$query = "insert into talent_has_tag(talent_talentid,tag_tagid) values((SELECT talentid FROM talent ORDER BY talentid DESC limit 1),$tagid)";
		return $mysqli->query ( $query );
	}
	
}


?>