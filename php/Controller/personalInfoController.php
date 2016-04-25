<?php
/*
 * @author Wouter van de Ven
 * */

include_once ('Model/personalInfoModel.php');

class PersonalInfoController
{
	function Index($smarty)
	{
		include_once ('Model/user.class.php');
		$personalInfoModel = new PersonalInfoModel();
		$user = new User();
		$username = $_SESSION ['email'];
		//get all personal info of logged in user
		$user = $personalInfoModel->getPersonalInfo($username);
		
		if ($smarty == null) {
			global $smarty;
		}
		
		$smarty->assign ( 'user', $user );
		$smarty->display ( '../View/personalinfo.tpl' );
	}
}

?>