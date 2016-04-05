<?php
include ('../Smarty/header.php');
include ('../../Model/DB/Database.class.php');


$wisharray = array();
$db = Database::getInstance ();
$mysqli = $db->getConnection ();
$sql_query = "select * from wens";
$result = $mysqli->query ( $sql_query );
while ( $row = $result->fetch_object () ) {
	array_push($wisharray, $row);
}


$smarty->assign('wishes', $wisharray);

$smarty->display ( '../../View/CMS/wishlist.tpl' );

