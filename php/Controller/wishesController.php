<?php
/*
 * @author: Jarric van Krieken
 */


class WishesController {
	
	function index() {
		require_once 'Model/wishesAndTalentsModel.php';
		global $smarty;
		$wishesModel = new WishesAndTalentsModel();
		
		if(isset($_SESSION['userName'])){
			
			$userWishes = $wishesModel->getUserWishes($_SESSION['userName']);
			$smarty->assign('wishesArray', $userWishes);
			if($userWishes==null || count($userWishes) < 3) {
				$smarty->assign('tagsArray', $wishesModel->getTags());
			}
		}
		
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}
		$smarty->display("wishes.tpl");
	}
}

?>