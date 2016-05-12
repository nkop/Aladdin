<?php
include ('../../Model/wishesAndTalentsModel.php');

$handler = new TalentHandler();

class TalentHandler{

	public function __construct() {
	session_start();
	$talentModel = new WishesAndTalentsModel();
	
	if(isset($_POST["save"])) {
		if(isset($_POST["talent"]) && isset($_SESSION["userName"])) {
			$talentModel->insertTalent($_POST["talent"],$_SESSION['userName']);
			if(isset ($_POST["tags"])){
				foreach($_POST["tags"] as $tag) {
					$talentModel->insertTagToTalent($tag);
				}
			}			
		}
		else{
			header("Location: ../../index.php?controller=talents&action=index&pass=false");
			exit();
		}
	}

	header("Location: ../../index.php?controller=talents&action=index&pass=true"); 
	exit();
	}
}
?>