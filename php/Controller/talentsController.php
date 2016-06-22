<?php

/*
 * @author: Jarric van Krieken
 */

class TalentsController {
	function index() {
		require_once 'Model/talentModel.php';
		global $smarty;
		$talentModel = new WishesModel();
		
		if(isset($_SESSION['userName'])){
			$wishCount = $talentModel->getWishAmount($_SESSION['userName']);
			$smarty->assign('wishesCount', $wishCount);
			if($wishCount >= 0 || $wishCount != null)
			$talentArray = $talentModel->getUserTalents($_SESSION['userName']);
			$smarty->assign('talentArray', $talentArray);
			$smarty->assign('tagsArray', $talentModel->getTags());
		}
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}
		
		$smarty->display("talents.tpl");
	}

}
?>