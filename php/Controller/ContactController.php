<?php
include ('Smarty/header.php');
include 'Navbar.php';
include 'Footer.php';

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Set the session contents
$_SESSION['captcha_id'] = $str;

$smarty->assign('time', time());

$smarty->display("page_contact.tpl")

?>