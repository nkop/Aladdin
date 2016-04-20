<?php
include ('Smarty/header.php');
include ('../Model/user.php');
include ('../Model/PersonalInfoDB.php');
include 'navbar.php';
include 'footer.php';

$user = new user();
$username = $_SESSION ['email'];
//get all personal info of logged in user
$user = getPersonalInfo($username);

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset ( $_POST ['submit'] ) && isset ( $_POST ['accountid'] ) && isset ( $_POST ['FirstNameInput'] ) && isset ( $_POST ['LastNameInput'] ) && isset ( $_POST ['ZipCodeInput'] ) && isset ( $_POST ['HouseNumberInput'] ) && isset ( $_POST ['StreetInput'] ) && isset ( $_POST ['CityInput'] ) && isset ( $_POST ['EmailInput'] )) {
	// update users personal info
	updateUser ( $_POST ['accountid'], $_POST ['FirstNameInput'], $_POST ['MiddleNameInput'], $_POST ['LastNameInput'], $_POST ['ZipCodeInput'], $_POST ['HouseNumberInput'], $_POST ['StreetInput'], $_POST ['CityInput'], $_POST ['EmailInput'] );
	header ( "Location: " . $actual_link );
}

$smarty->assign ( 'user', $user );
$smarty->display ( '../View/page_personalinfo.tpl' );
?>