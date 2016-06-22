<?php
class regulationsController{
	private $model = null;
	
	function __construct(){
		include_once 'Model/CMS/regulationsModel.php';
		$this->model = new regulationsModel();
	}
	
	function Index($smarty) {
			if ($smarty == null) {
				global $smarty;
			}
			$smarty->assign ( 'regelcategorieen', $this->model->getRuleCategories() );
			$smarty->assign ( 'regels', $this->model->getRules() );
			$smarty->display ( 'regulations.tpl' );
	}
}
?>