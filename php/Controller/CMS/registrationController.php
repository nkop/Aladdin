<?php
/*
 * @author Wouter van de Ven
 */
class RegistrationController{
	private $succesfull = 0;
	
	// ** ACCEPT **
	function Accept(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	// ** DECLINE **
	function Decline(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	function Index($smarty)
	{
		include_once ('Model/CMS/registrationModel.php');
		
		if ($smarty == null) {
			global $smarty;
		}
		
		$registrationarray = array();
		$registrationModel = new RegistrationModel();
		// get all registrations that have not been accepted or declined
		$registrationarray = $registrationModel->getOpenRegistrations();
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('registrations', $registrationarray);
		$smarty->display ( '../View/CMS/registrationsList.tpl' );
	}
}


