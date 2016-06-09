<?php
/*
 * @author Wouter van de Ven
 */
include_once ('Model/talent.class.php');

class TalentController{
	private $succesfull = 0;
	
	// ** Function to accept a talent **
	function Accept(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	// ** Function to decline a talent
	function Decline(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	
	function Index($smarty)
	{
		include_once ('Model/CMS/talentsModel.php');
		
		if ($smarty == null) {
			global $smarty;
		}
			
		$talentarray = array();
		$talentModel = new TalentsModel();
		// get all talents that have not been accepted or declined
		$talentarray = $talentModel->getOpenTalents();
		
		$talentObject = new Talent();
		foreach($talentarray as $talentObject)
		{
			// get all tags for a talent
			$talentObject->talentTags = $talentModel->getTags($talentObject->talentid);
		}
					
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('talents', $talentarray);
		$smarty->display ( '../View/CMS/talentlist.tpl' );
	}
}