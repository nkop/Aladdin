<?php
include ('../Smarty/header.php');
include ('../../Model/CMS/talents.php');

$talentarray = array();
// get all talents that have not been accepted or declined
$talentarray = getOpenTalents();

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_POST['submit']) && isset($_POST['talentID']))
{
	// ** ACCEPT **
	acceptTalent($_POST['talentID']);
	header ( "Location: " . $actual_link );
}
else if (isset($_POST['decline']) && isset($_POST['talentID']))
{
	// ** DECLINE **
	declineTalent($_POST['talentID']);
	header ( "Location: " . $actual_link );
}

$smarty->assign('talents', $talentarray);
$smarty->display ( '../../View/CMS/talentlist.tpl' );
