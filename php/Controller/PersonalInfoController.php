<?php
include ('Smarty/header.php');
include 'navbar.php';
include 'footer.php';
include ('../Model/DB/Database.class.php');

include ('./Handlers/personalInfo.php');

include ('../Model/user.php');

$user = new user ();

$username = $_SESSION ['email'];
$db = Database::getInstance ();
$mysqli = $db->getConnection ();
$sql_query = "select * from account where email = '$username'";
$result = $mysqli->query ( $sql_query );
while ( $row = $result->fetch_object () ) {
	$user->accountid = $row->accountid;
	$user->firstname = $row->voornaam;
	$user->middlename = $row->tussenvoegsel;
	$user->lastname = $row->achternaam;
	$user->email = $row->email;
	$user->zipcode = $row->postcode;
	$user->city = $row->woonplaats;
	$user->street = $row->straatnaam;
	$user->birthday = $row->geboortedatum;
	$user->housenumber = $row->huisnummer;
}
$result->close ();

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset ( $_POST ['submit'] ) && isset ( $_POST ['accountid'] ) && isset ( $_POST ['FirstNameInput'] ) && isset ( $_POST ['LastNameInput'] ) && isset ( $_POST ['ZipCodeInput'] ) && isset ( $_POST ['HouseNumberInput'] ) && isset ( $_POST ['StreetInput'] ) && isset ( $_POST ['CityInput'] ) && isset ( $_POST ['EmailInput'] )) {
	validateData ( $_POST ['accountid'], $_POST ['FirstNameInput'], $_POST ['MiddleNameInput'], $_POST ['LastNameInput'], $_POST ['ZipCodeInput'], $_POST ['HouseNumberInput'], $_POST ['StreetInput'], $_POST ['CityInput'], $_POST ['EmailInput'] );
	header ( "Location: " . $actual_link );
}

$smarty->assign ( 'user', $user );

$smarty->display ( '../View/page_personalinfo.tpl' );
?>