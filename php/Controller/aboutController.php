<?php
class aboutController{	
	
	private $model = null;
	
	function __construct(){
		include_once 'Model/CMS/aboutModel.php';
		$this->model = new aboutModel();
	}
	
function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'abouts', $this->model->getAbouts() );
		$smarty->display ( 'about.tpl' );
	}

}
?>