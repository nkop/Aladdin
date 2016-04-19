<?php
include ('Smarty/header.php');
include_once '../Model/DB/Database.class.php';
include 'navbar.php';
include 'footer.php';


$db = Database::getInstance ();
$sql = $db->getConnection ();

$result = $sql->query("SELECT * FROM tekstvak WHERE tekstvakid = 1");


$smarty->assign('result', $result);
$smarty->display("Homepage.tpl")

?>