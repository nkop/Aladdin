<?php
/**
 * @author Ferry Zijlmans
*/
//include the classes
include 'Controller/Smarty/header.php';
require('Controller/CMS/editNewsItemsController.php');
require('Controller/CMS/editNewsController.php');
require('Controller/CMS/dashboardController.php');
require('Controller/CMS/wishController.php');
require('Controller/CMS/talentController.php');
require('Controller/CMS/editFaqController.php');
require('Controller/CMS/editHomeController.php');
require('Controller/CMS/tagController.php');
require('Controller/CMS/userController.php');
require('Controller/CMS/editRegulationsController.php');
require('Controller/CMS/registrationController.php');
require('Controller/CMS/matchesController.php');
require('Controller/CMS/cmsLoginController.php');
require ('Controller/CMS/editSponsorItemsController.php');
require ('Controller/CMS/editSponsorController.php');
require ('Controller/CMS/editBannerItemsController.php');
require ('Controller/CMS/editBannerController.php');
require	('Controller/CMS/editAboutController.php');
require('Controller/CMS/Handlers/accessHandler.php');
// require('Controller/CMS/lifetimeWishController.php');

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
			$controller = new DashboardController();
}
else{
	$controller = new DashboardController();
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
$accessHandler = new AccessHandler();
if($accessHandler->CheckAccess()){
	$controller->{$actionName}($id);
}else{
	header('location: index.php');
}


?>
