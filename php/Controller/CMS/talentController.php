<?php
include_once ('Model/CMS/talentsModel.php');
include_once ('Model/talent.class.php');

class TalentController{
	private $succesfull = 0;
	
	function Accept(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	function Decline(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	
	function Index($smarty)
	{
		if ($smarty == null) {
			global $smarty;
		}
			
		$talentarray = array();
		$talentModel = new TalentsModel();
		// get all talentsModel that have not been accepted or declined
		$talentarray = $talentModel->getOpenTalents();
		
		$talentObject = new Talent();
		foreach($talentarray as $talentObject)
		{
			$talentObject->talentTags = $talentModel->getTags($talentObject->talentid);
		}
					
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('talents', $talentarray);
		$smarty->display ( '../View/CMS/talentlist.tpl' );
	}
}