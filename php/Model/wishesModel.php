<?php
/*
 * @author: Jarric van Krieken
 */
include "wish.class.php";
include "tag.class.php";
include "talent.class.php";
include "match.class.php";

class WishModel {
	// database connection
	function getConnection() {
		require_once 'DB/Database.class.php';
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		return $sql;
	}
	// get the wishes that are active of one user
	function getUserWishes($userName) {
		$mysqli = $this->getConnection ();
		$wishArray = array ();
		if (isset ( $userName )) {
			$sql_query = "select wens.tekst,status.status,wens.wensenid, wens.verval_datum 
							from wens 
							left join status on wens.status = status.statusid 
							left join account on wens.plaatser = account.accountid 
							where account.gebruikersnaam= '$userName' and (status.statusid=1 or status.statusid=6 or status.statusid= 2)";
			$result = $mysqli->query ( $sql_query );
			
			while ( $row = $result->fetch_object () ) {
				$wish = new Wish ();
				$wish->wishtext = $row->tekst;
				$wish->wishstatus = $row->status;
				$wish->wishid = $row->wensenid;
				
				$vervalDate = $row->verval_datum;
				$checkDate = date ( "Y-m-d", strtotime ( "+1 month" ) );
				if ($vervalDate < $checkDate) {
					$wish->isExtendable = true;
				}
				
				$sql_query = "select tag.tagnaam,tag.tagid from tag left join wens_has_tag on tag.tagid = wens_has_tag.tag_tagid where wens_wensenid = $wish->wishid";
				$tagsResult = $mysqli->query ( $sql_query );
				
				$tagArray = Array ();
				while ( $row = $tagsResult->fetch_object () ) {
					$tag = new Tag ();
					$tag->tagId = $row->tagid;
					$tag->tagName = $row->tagnaam;
					
					array_push ( $tagArray, $tag );
				}
				
				$wish->tags = $tagArray;
				array_push ( $wishArray, $wish );
			}
			$result->close ();
			return $wishArray;
		}
	}
	
	// Voegt een nieuwe wens toe
	function insertWish($wish, $userName) {
		$mysqli = $this->getConnection ();
		$wish = $mysqli->real_escape_string ( $wish );
		$date = date ( 'Y-m-d' );
		$effectiveDate = date ( 'Y-m-d', strtotime ( "+6 month" ) );
		$query = "insert into wens(tekst,plaatser,creatie_datum,status, verval_datum) values('$wish',(select accountid from account where gebruikersnaam= '$userName'),'$date',1, '$effectiveDate')";
		return $mysqli->query ( $query );
	}
	
	// $wish is de wensid van de desbetreffende wens
	function extendWish($wish) {
		$mysqli = $this->getConnection ();
		$query = "select verval_datum from wens where wensenid = $wish";
		$result = $mysqli->query ( $query );
		while ( $row = $result->fetch_object () ) {
			$oldDate = $row->verval_datum;
		}
			$newDate = date ( 'Y-m-d', strtotime ( "+3 month", strtotime ( $oldDate ) ) );
			$query = "update wens SET verval_datum = '$newDate' WHERE wensenid = '$wish'";
			return $mysqli->query ( $query );
	}
	
	// get all tags that are active
	function getTags() {
		$db = Database::getInstance ();
		$mysqli = $db->getConnection ();
		
		$tagsArray = array ();
		$sql_query = "select tagnaam,tagid from tag where status=6";
		$result = $mysqli->query ( $sql_query );
		
		while ( $row = $result->fetch_object () ) {
			$Tag = new Tag ();
			$Tag->tagId = $row->tagid;
			$Tag->tagName = $row->tagnaam;
			array_push ( $tagsArray, $Tag );
		}
		
		$result->close ();
		return $tagsArray;
	}
	
	// add a tag to a wish
	function insertTagToWish($tagid) {
		$mysqli = $this->getConnection ();
		$tagid = $mysqli->real_escape_string ( $tagid );
		$query = "insert into wens_has_tag(wens_wensenid,tag_tagid) values((SELECT wensenid FROM wens ORDER BY wensenid DESC limit 1),$tagid)";
		return $mysqli->query ( $query );
	}
	
	// get the amount of wishes of this user
	function getWishAmount($userName) {
		$mysqli = $this->getConnection ();
		$count = 0;
		
		$sql_query = "select * from wens where plaatser = (select accountid from account where gebruikersnaam = '$userName') and (status=1 or status=6 or status= 2)";
		$result = $mysqli->query ( $sql_query );
		
		while ( $row = $result->fetch_object () ) {
			$count ++;
		}
		$result->close ();
		return $count;
	}
	
	// fulfill a wish, done by the user
	function fulfillWish($wishId,$userName) {
		$mysqli = $this->getConnection();
		$wishId = $mysqli->real_escape_string ( $wishId );
		$userName = $mysqli->real_escape_string ( $userName );
		
		$query = "select count(*) as aantal from wens where wensenid = $wishId and plaatser = (select accountid from account where gebruikersnaam = '$userName')";
		
		$result = $mysqli->query($query);
		$count = 0;
		while ( $row = $result->fetch_object () ) {
			$count = $row->aantal;
		}
		$succes = false;
		if($count > 0){
			
			$query = "select talentid from `match` where wensenid = $wishId and status = 2";
			
			$result = $mysqli->query($query);
			$talentId;
			while ( $row = $result->fetch_object () ) {
				$talentId = $row->talentid;
			}
			if($talentId != null) {
				$query = "update `match` set status = 3 where talentid = $talentId and wensenid = $wishId";
				$mysqli->query ( $query );
				$query = "update talent set status = 3 where talentid = $talentId ";
				$mysqli->query ( $query );
				$query = "update wens set status = 3 where wensenid = $wishId";
				$mysqli->query ( $query );
				$succes = true;
			}
		}
		return $succes;
	}
}

?>