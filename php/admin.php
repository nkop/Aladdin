<?php
/**
 * @author Ferry Zijlmans
*/
//include the classes
include 'Controller/Smarty/header.php';
require('Controller/CMS/editNewsItemsController.php');
require('Controller/CMS/dashboardController.php');

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

$controller->{$actionName}($id);
?>