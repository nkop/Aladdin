<?php

require 'Model/wishesAndTalentsModel.php';

class WishesController {
	
	//$myarray = array();
	//$myarray[0] = "ik wil graag ferrari rijden";
	//$myarray[1] = "ik wil graag lamborghini rijden";
	//$myarray[2] = "ik wil graag maserati rijden";
	
	function index() {

		global $smarty;
		$wishesModel = new WishesAndTalentsModel();
		if(isset($_SESSION['email'])){
			$smarty->assign('wishesArray', $wishesModel->getUserWishes($_SESSION['email']));
		}
		
		if(isset($_GET["pass"])){
			$smarty->assign('pass', $_GET["pass"]);
		}
		$smarty->display("wishes.tpl");
	}
	

	
	
}

?>