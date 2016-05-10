<?php

include 'Model/wishesandtalentsModel.php';

class TalentsController {
	function index() {
		
		global $smarty;
		$wishesModel = new WishesAndTalentsModel();
		
		if(isset($_SESSION['email'])){
		
			$smarty->assign('wishesArray', $wishesModel->getUserWishes($_SESSION['email']));
			$smarty->assign('talentArray', $wishesModel->getUserTalents($_SESSION['email']));
		}
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}
		
		$smarty->display("talents.tpl");
	}

}
?>