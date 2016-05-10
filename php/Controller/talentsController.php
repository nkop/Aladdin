<?php

require_once 'Model/wishesandtalentsModel.php';

class TalentsController {
	function index() {
		
		global $smarty;
		$wishesModel = new WishesAndTalentsModel();
		
		if(isset($_SESSION['userName'])){
			$smarty->assign('wishesCount', $wishesModel->getWishAmount($_SESSION['userName']));
			$smarty->assign('talentArray', $wishesModel->getUserTalents($_SESSION['userName']));
			$smarty->assign('tagsArray', $wishesModel->getTags());
		}
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}
		
		$smarty->display("talents.tpl");
	}

}
?>