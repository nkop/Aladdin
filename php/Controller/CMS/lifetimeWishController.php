<?php
class LifetimeWishController{
	
	
	function Index($smarty)
	{
		if ($smarty == null) {
			global $smarty;
		}
		
		include_once 'model/cms/lifetimeWishModel.php';
		$lifetimewishmodel = new LifetimeWishModel();
		// get all registrations that have not been accepted or declined
		$lifetimewishdata = $lifetimewishModel->gatherData();
		
		$smarty->assign($lifetimewish, 'lifetimewishdata');
		$smarty->display ( '../View/CMS/lifetimewish.tpl' );
	}
}


