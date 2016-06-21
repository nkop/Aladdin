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
		//give the banner a random slide effect
		$smarty->assign('slideEffect', rand(1, 113));
		$smarty->assign('banners',$this->model->getBanners());
		$smarty->assign('sponsoren', $this->model->getSponsor());
		$smarty->assign('result', $this->model->getTexts());
		$smarty->assign('userCount', $this->model->getCount("account"));
		$smarty->assign('wishCount', $this->model->getCount("wens"));
		$smarty->assign('talentCount', $this->model->getCount("talent"));
		$smarty->display('index.tpl');
	}


}
?>