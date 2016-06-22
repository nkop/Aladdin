<?php
/*
 * @author: Jarric van Krieken
 */
class WishesController {
	private $wishesModel;
	function WishesController() {
		require_once 'Model/wishesModel.php';
		$this->wishesModel = new WishesModel ();
		
		
	}
	function index() {

		global $smarty;
		if (isset ( $_SESSION ['userName'] )) {
			$userWishes = $this->wishesModel->getUserWishes ( $_SESSION ['userName'] );
			$smarty->assign ( 'wishesArray', $userWishes );
			if ($userWishes == null || count ( $userWishes ) < 3) {
				$smarty->assign ( 'tagsArray', $wishesModel->getTags () );
			}
		}
		if (isset ( $_GET ["pass"] )) {
			$smarty->assign ( 'pass', $_GET ["pass"] );
		}
		$smarty->display ( "wishes.tpl" );
	}
}

?>