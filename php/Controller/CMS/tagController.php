<?php
/*
 * @author Wouter van de Ven
 */
class TagController{
	
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
		include_once ('Model/CMS/tagsModel.php');
		if ($smarty == null) {
			global $smarty;
		}
		
		$tagarray = array();
		$tagModel = new TagsModel();
		// get all tags that have not been accepted or declined
		$tagarray = $tagModel->getOpenTags();
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('tags', $tagarray);
		$smarty->display ( '../View/CMS/taglist.tpl' );
	}
}


