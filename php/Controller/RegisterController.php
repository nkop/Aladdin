<?php

include ('Smarty/header.php');
include 'Navbar.php';
include 'Footer.php';

$RegistrationFail = false;
$RegistrationSuccess = false;

if(isset($_GET['status'])){
$status = strtolower(htmlspecialchars($_GET['status']));
switch ($status) {
    case "fail":
        $RegistrationFail = true;
        break;
    case "success":
        $RegistrationSuccess = true;
        break;
      }
    }

$smarty->assign('RegistrationFail', $RegistrationFail);
$smarty->assign('RegistrationSuccess', $RegistrationSuccess);
$smarty->display('page_registration.tpl');


?>
