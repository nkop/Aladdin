<?php
include ('Smarty/header.php');
include 'navbar.php';
include 'footer.php';

$RecoverError = false;
$RecoverSuccess = false;
if(isset($_GET['status'])){
$status = strtolower(htmlspecialchars($_GET['status']));
switch ($status) {
    case "fail":
        $RecoverError = true;
        break;
    case "success":
        $RecoverSuccess = true;
        break;
      }
    }
$smarty->assign('RecoverError', $RecoverError);
$smarty->assign('RecoverSuccess', $RecoverSuccess);
$smarty->display('page_passwordrecover.tpl');



?>
