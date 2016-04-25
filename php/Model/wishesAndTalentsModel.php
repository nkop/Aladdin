<?php
include ('/DB/Database.class.php');
include ("wish.class.php");

function getUserWishes($email) {
$db = Database::getInstance ();
$mysqli = $db->getConnection();

$wishArray = array();
	if(isset($email)){
		$sql_query = "select wens.tekst,status.status from wens left join status on wens.status = status.statusid left join account on wens.plaatser = account.accountid where email= '$email' and (status.statusid=1 or status.statusid=6)";
		$result = $mysqli->query($sql_query);
		
		while ( $row = $result->fetch_object () ) {
			$wish = new Wish();
			$wish->wishtext = $row->tekst;
			$wish->wishstatus = $row->status;
			array_push($wishArray, $wish);
		}
		$result->close ();
		return $wishArray;
	}
}

function getUserTalents($email) {
	$db = Database::getInstance ();
	$mysqli = $db->getConnection();

	$wishArray = array();
	if(isset($email)){
		$sql_query = "select talent.talenttekst from talent left join account on account.accountid = talent.account where account.email='$email'";
		$result = $mysqli->query($sql_query);

		while ( $row = $result->fetch_object () ) {
			array_push($wishArray, $row->talenttekst);
		}
		$result->close ();
		return $wishArray;
	}
}

function insertWish($wish) {
	$db = Database::getInstance ();
	$mysqli = $db->getConnection();
	
	$wish = $mysqli->real_escape_string ( $wish );
	$date = date("Y-m-d");
	#todo krijg sessie gebruikerid of mail
	$query = "insert into wens(tekst,plaatser,creatie_datum,status) values('$wish',(select accountid from account where email = 'admin'),'$date',1) ";
	return $mysqli->query ( $query );
}

function insertTalent($talent) {
	$db = Database::getInstance ();
	$mysqli = $db->getConnection();

	$talent = $mysqli->real_escape_string ( $talent );
	#todo krijg sessie gebruikerid of mail
	$query = "insert into talent(talenttekst,account) values('$talent', (select accountid from account where email = 'admin')) ";
	return $mysqli->query ( $query );
}

function getWishAmount() {
	$db = Database::getInstance ();
	$mysqli = $db->getConnection();
	
	$count=0;
	$sql_query = "select * from wens where plaatser = 68 and (status=1 or status=6)";
	$result = $mysqli->query($sql_query);
	
	while ( $row = $result->fetch_object () ) {
		$count++;
	}
	$result->close ();
	return $count;

}

?>