<?php
include ('../Smarty/header.php');
include ('../../Model/DB/Database.class.php');


$wisharray = array();
$db = Database::getInstance ();
$mysqli = $db->getConnection ();
$sql_query = "select * from wens where status = 1";
$result = $mysqli->query ( $sql_query );
while ( $row = $result->fetch_object () ) {
	array_push($wisharray, $row);
}

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_POST['submit']) && isset($_POST['wishID']))
{
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	if ($_POST['wishID'] > 0) {
		$sql_query = "UPDATE `wens` SET `status` = '6' WHERE `wensenid` = ".$_POST['wishID'].";";
	}
	$mysqli->query($sql_query);
	
	header ( "Location: " . $actual_link );
}


$smarty->assign('wishes', $wisharray);

$smarty->display ( '../../View/CMS/wishlist.tpl' );

