<?php
include_once ('Model/CMS/wishesModel.php');

class WishController{
	
	function Index($smarty)
	{
		if ($smarty == null) {
			global $smarty;
		}
		
		$wisharray = array();
		$wishModel = new WishesModel();
		// get all wishesModel that have not been accepted or declined
		$wisharray = $wishModel->getOpenWishes();
		
		$smarty->assign('wishes', $wisharray);
		$smarty->display ( '../View/CMS/wishlist.tpl' );
	}
}


