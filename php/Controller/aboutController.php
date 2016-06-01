<?php
class aboutController{
	private $model = null;
	
	function Index($smarty){
		include_once 'Model/homepageModel.php';
		$this->model = new homepageModel();
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('result', $this->model->getTexts());
		$smarty->display('about.tpl');
	}

}
?>