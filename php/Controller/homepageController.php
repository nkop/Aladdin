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

	//show
	function Index($smarty){
		include_once 'Model/homepageModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('result', getTexts());
		$smarty->display('index.tpl');
	}


}
?>