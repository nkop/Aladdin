<?php
/*
 * @author Ferry Zijlmans
 * @author Niels Kop
 */
class HomepageController{
	/*
	 * @author Niels Kop 
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$result = $sql->query("SELECT * FROM tekstvak WHERE tekstvakid = 1");*/
	var $model = null;
	
	function __construct(){
		include_once 'Model/homepageModel.php';
		$this->model = new homepageModel();
	}

	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('sponsoren', $this->model->getSponsor());
		$smarty->assign('result', $this->model->getTexts());
		$smarty->display('index.tpl');
	}


}
?>