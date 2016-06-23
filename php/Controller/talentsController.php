<?php

/*
 * @author: Jarric van Krieken
 */

class TalentsController {
	// constructor
	function index() {
		require('CMS/Handlers/accessHandler.php');
		$accessHandler = new AccessHandler();
		// check if user is logged in
		if($accessHandler->CheckLoginUser()){
			require_once 'Model/talentModel.php';
			global $smarty;
			$talentModel = new TalentsModel();
			
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
		}else{
			header('location: index.php');
		}
	}

}
?>