<?php
/*
 * @author: Jarric van Krieken
 */

include "wish.class.php";
include "tag.class.php";
include "talent.class.php";
include "match.class.php";

class WishesAndTalentsModel {
	
	function getConnection() {
		require_once 'DB/Database.class.php';
		$db = Database::getInstance();
		$sql = $db->getConnection();
		return $sql;
	}
	
	function getUserWishes($userName) {
		$mysqli = $this->getConnection();
		$wishArray = array();
		if(isset($userName)){
			$sql_query = "select wens.tekst,status.status,wens.wensenid 
							from wens 
							left join status on wens.status = status.statusid 
							left join account on wens.plaatser = account.accountid 
							where account.gebruikersnaam= '$userName' and (status.statusid=1 or status.statusid=6)";
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

	
	function insertWish($wish,$userName) {
		$mysqli = $this->getConnection();
		$wish = $mysqli->real_escape_string ( $wish );
		$date = date("Y-m-d");
		$query = "insert into wens(tekst,plaatser,creatie_datum,status) values('$wish',(select accountid from account where gebruikersnaam= '$userName'),'$date',1) ";
		return $mysqli->query ( $query );
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
}

?>