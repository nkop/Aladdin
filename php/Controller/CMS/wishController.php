<?php
include_once ('Model/wish.class.php');

class WishController{
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
		include_once ('Model/CMS/wishesModel.php');
		
		if ($smarty == null) {
			global $smarty;
		}
		
		$wisharray = array();
		$wishModel = new WishesModel();
		// get all wishesModel that have not been accepted or declined
		$wisharray = $wishModel->getOpenWishes();
		
		$wishObject = new Wish();
		foreach($wisharray as $wishObject)
		{
			$wishObject->tags = $wishModel->getTags($wishObject->wensenid);
		}
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('wishes', $wisharray);
		$smarty->display ( '../View/CMS/wishlist.tpl' );
	}
}


