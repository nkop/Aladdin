<?php
class aboutController{

	
	function Index($smarty){
		include_once 'Model/homepageModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('result', getTexts());
		$smarty->display('about.tpl');
	}

}
?>