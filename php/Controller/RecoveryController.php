<?php
include ('Smarty/header.php');
include 'Navbar.php';
include 'Footer.php';

if(isset($_GET['status'])){
$status = strtolower(htmlspecialchars($_GET['status']));
switch ($status) {
    case "fail":
        $smarty->display('RecoverFail.tpl');
        break;
    case "success":
        $smarty->display('RecoverSuccess.tpl');
        break;
      }
    }
if(!isset($_GET['status'])){
$smarty->display('page_passwordrecover.tpl');
}

?>
