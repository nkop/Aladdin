<?php

/*
 * @author: Jarric van Krieken
*/

class MatchesController {
	// constructor
	function index() {
		require('CMS/Handlers/accessHandler.php');
		$accessHandler = new AccessHandler();
		// check if user is logged in
		if($accessHandler->CheckLoginUser()){
			require_once 'Model/matchModel.php';
			global $smarty;
			$matchesModel = new MatchModel();
			if(isset($_SESSION['userName'])){
				$smarty->assign('possibleMatchArray',$matchesModel->getPossibleMatches($_SESSION['userName']));
			}
			if(isset($_GET["pass"])){
				$smarty->assign('pass', $_GET["pass"]);
			}
			
			$smarty->display("matches.tpl");
		}else{
			header('location: index.php');
		}
		

	}

}
?>