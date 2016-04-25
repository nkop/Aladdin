<?php
//include ('../../Model/CMS/editPagesModel.php');

class EditNewsItemsController{
	
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->display('../View/CMS/newsItemsEdit.tpl');
	}
}

