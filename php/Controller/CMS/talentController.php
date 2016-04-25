<?php
include_once ('Model/CMS/talentsModel.php');

class TalentController{
	
	function Index($smarty)
	{
		if ($smarty == null) {
			global $smarty;
		}
			
		$talentarray = array();
		$talentModel = new TalentsModel();
		// get all talentsModel that have not been accepted or declined
		$talentarray = $talentModel->getOpenTalents();
		
		$smarty->assign('talents', $talentarray);
		$smarty->display ( '../View/CMS/talentlist.tpl' );
	}
}