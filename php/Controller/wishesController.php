<?php
include ('Smarty/header.php');
include 'NavbarController.php';
include 'FooterController.php';
include '../model/wishesandtalentsModel.php';

//$myarray = array();
//$myarray[0] = "ik wil graag ferrari rijden";
//$myarray[1] = "ik wil graag lamborghini rijden";
//$myarray[2] = "ik wil graag maserati rijden";

if(isset($_SESSION['email'])){
	$smarty->assign('wishesArray', getUserWishes($_SESSION['email']));
}

if(isset($_GET["pass"])){
	$smarty->assign('pass', $_GET["pass"]);
}
$smarty->display("wishes.tpl");

?>