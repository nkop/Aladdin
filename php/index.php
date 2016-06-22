<?php
/**
 * @author Ferry Zijlmans
 */
//include the classes
//php auto loader
include 'Controller/Smarty/header.php';
require('Controller/loginController.php');
require('Controller/registerController.php');
require('Controller/homepageController.php');
require('Controller/recoveryController.php');
require('Controller/navbarController.php');
require('Controller/footerController.php');
require('Controller/faqController.php');
require('Controller/newsController.php');
require('Controller/newsitemController.php');
require('Controller/personalInfoController.php');
require('Controller/aboutController.php');
require('Controller/regulationsController.php');
require('Controller/contactController.php');
require('Controller/wishesController.php');
require('Controller/talentsController.php');
require('Controller/matchesController.php');

$controller;
$actionName;
$id;
//What controller do i need?
if(isset($_GET["controller"]))
{
	//and controller to the var ex: login > loginController
	$controllerName = $_GET["controller"] . "Controller"; //Controller
	//check if class exist if it doesn't open the homepage
	if (class_exists($controllerName))
	$controller = new $controllerName();  //controller = new TodoController();
	else
		//TODO: open 404 page
		$controller = new HomepageController();
}
else{
	$controller = new HomepageController();
}
if(isset($_GET["action"]))
{
	$actionName = $_GET["action"]; //Detail
}
else{
	$actionName = "Index";
}
if(isset($_GET["id"])){
	//Id(possible get var)
	$id = $_GET["id"];
}
else{
	$id = null;
}

$navbar = new NavBarController();
$navbar->Index();
$controller->{$actionName}($id);


?>
