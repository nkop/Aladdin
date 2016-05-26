<?php
class UserController{
	
	function Index($smarty)
	{
		include_once ('Model/CMS/usersModel.php');
		if ($smarty == null) {
			global $smarty;
		}
		
		$userarray = array();
		$userModel = new UsersModel();
		// get all users
		$userarray = $userModel->getUsers();
		
		$smarty->assign('users', $userarray);
		$smarty->display ( '../View/CMS/userlist.tpl' );
	}
}