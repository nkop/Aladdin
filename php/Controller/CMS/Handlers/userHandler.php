<?php


include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/usersModel.php';

class UserHandler{
	//declare
	private $usersHandler="";

	public function __construct() {
		$userModel = new UsersModel();
		if (isset($_POST['ban']) && isset($_POST['userID']) && isset($_POST['banStatus'])){
			//Change status
			$userModel->banUser($_POST['userID'], $_POST['banStatus']);
			header('Location: ../../../admin.php?controller=user&action=Index');
		}
	}
}
//Call constuct function
$usersHandler = new UserHandler();
?>