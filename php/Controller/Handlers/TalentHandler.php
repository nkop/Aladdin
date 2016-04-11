<?php
include ('../../Model/wishesandtalents.php');

	if(isset($_POST["save"])) {
		if(isset($_POST["save"])) {
			insertTalent($_POST["talent"]);
		}
		else{
			header("Location: ../TalentsController.php?pass=false");
			exit();
		}
	}

	header("Location: ../TalentsController.php?pass=true"); 
	exit();
?>