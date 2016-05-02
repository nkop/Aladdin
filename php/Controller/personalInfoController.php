<?php
/*
 * @author Wouter van de Ven
 * */

include_once ('Model/personalInfoModel.php');

class PersonalInfoController
{
	private $ChangeError = false;
	private $ChangeSuccess = false;

	function SetMessage(){
		if(isset($_GET['status'])){
		$status = strtolower(htmlspecialchars($_GET['status']));
		switch ($status) {
				case "password":
						$this->ChangeError = true;
						break;
				case "success":
						$this->ChangeSuccess = true;
						break;
					}
				}
	}

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
		$this->SetMessage();
		$smarty->assign ( 'user', $user );
		$smarty->assign ('ChangeSuccess', $this->ChangeSuccess);
		$smarty->assign ('ChangeError', $this->ChangeError);
		$smarty->display ( '../View/personalinfo.tpl' );
	}
}

?>
