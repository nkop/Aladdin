<?php

include ('Smarty/header.php');
include 'Navbar.php';
include 'Footer.php';

if(isset($_GET['status'])){
$status = strtolower(htmlspecialchars($_GET['status']));
switch ($status) {
    case "fail":
        $smarty->display('ErrorPage.tpl');
        break;
    case "success":
        $smarty->display('SuccesPage.tpl');
        break;
      }
    }
if(!isset($_GET['status'])){
$smarty->display('page_registration.tpl');
}

?>
