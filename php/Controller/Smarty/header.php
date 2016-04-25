<?php

include ('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '/View';
$smarty->compile_dir = '/Temp';

/*
	use with:
	include ('Smarty/header.php');
	include 'navbarController.php';
	include 'footerController.php';

	$smarty->display("*.tpl")
 * */

?>
