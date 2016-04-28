<?php
include ('../../Model/wishesAndTalentsModel.php');

	$talentModel = new WishesAndTalentsModel();
	
	if(isset($_POST["save"])) {
		if(isset($_POST["save"])) {
			$talentModel->insertTalent($_POST["talent"]);
		}
		else{
			header("Location: ../../index.php?controller=talents&action=index&pass=false");
			exit();
		}
	}

	header("Location: ../../index.php?controller=talents&action=index&pass=true"); 
	exit();
?>