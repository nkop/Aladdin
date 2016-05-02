<?php
include_once ('Model/CMS/tagsModel.php');

class TagController{
	
	function Index($smarty)
	{
		if ($smarty == null) {
			global $smarty;
		}
		
		$tagarray = array();
		$tagModel = new TagsModel();
		// get all tags that have not been accepted or declined
		$tagarray = $tagModel->getOpenTags();
		
		$smarty->assign('tags', $tagarray);
		$smarty->display ( '../View/CMS/taglist.tpl' );
	}
}


