<?php
/*
 * @author Ferry Zijlmans
 */
class HomepageController{
	private $result = "";
	/*
	 * @author Niels Kop 
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$result = $sql->query("SELECT * FROM tekstvak WHERE tekstvakid = 1");*/

	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('result', $this->result);
		$smarty->display('index.tpl');
	}


}
?>