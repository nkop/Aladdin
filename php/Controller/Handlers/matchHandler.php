<?php


/*
 * @author: Jarric van Krieken
 */

$handler = new MatchHandler();

class MatchHandler{
	
	public function __construct() {
		include ('../../Model/wishesAndTalentsModel.php');
		session_start();
		$matchModel = new WishesAndTalentsModel();
		$action;

		if(isset ($_POST["talentId"]) && isset($_POST["wishId"])){	
			if(isset($_POST["submit"])) {

				$matchModel->insertMatch($_POST["talentId"],$_POST["wishId"]);
			}
			if(isset($_POST["decline"])) {
				$matchModel->insertDeclinedMatch($_POST["talentId"],$_POST["wishId"]);
			}
		}
		else{
			header("Location: ../../index.php?controller=talents&action=index&pass=false");
			exit();
		}
		header("Location: ../../index.php?controller=talents&action=index&pass=true");
		exit();
	}
}
?>