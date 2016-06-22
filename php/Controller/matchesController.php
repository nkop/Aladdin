<?php

/*
 * @author: Jarric van Krieken
*/

class MatchesController {
	function index() {
		require_once 'Model/matchModel.php';
		global $smarty;
		$matchesModel = new WishesModel();

		if(isset($_SESSION['userName'])){
			$smarty->assign('possibleMatchArray',$matchesModel->getPossibleMatches($_SESSION['userName']));
		}
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}

		$smarty->display("matches.tpl");
	}

}
?>