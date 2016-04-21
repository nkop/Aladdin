<?php
include ('../Smarty/header.php');
include ('../../Model/CMS/wishesModel.php');


$wisharray = array();
// get all wishesModel that have not been accepted or declined
$wisharray = getOpenWishes();

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_POST['submit']) && isset($_POST['wishID']))
{
	// ** ACCEPT **
	acceptWish($_POST['wishID']);	
	header ( "Location: " . $actual_link );
}
else if (isset($_POST['decline']) && isset($_POST['wishID']))
{
	// ** DECLINE **
	declineWish($_POST['wishID']);	
	header ( "Location: " . $actual_link );
}

$smarty->assign('wishesModel', $wisharray);
$smarty->display ( '../../View/CMS/wishlist.tpl' );

