<?php
include ('Smarty/header.php');
include_once '../Model/DB/Database.class.php';
include 'Navbar.php';
include 'Footer.php';


$db = Database::getInstance ();
$sql = $db->getConnection ();

$result = $sql->query("SELECT * FROM tekstvak WHERE tekstvakid = 1");


$smarty->assign('result', $result);
$smarty->display("Homepage.tpl")

?>