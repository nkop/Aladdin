<?php
include ('../../Model/wishesAndTalentsModel.php');

	$wishModel = new WishesAndTalentsModel();
	
	$count = $wishModel->getWishAmount();
	if(isset($_POST["save"])) {
		for($i = 1; $i <=(3-$count);$i++ ){
			if(isset ($_POST["wens$i"])){
				$wishModel->insertWish($_POST["wens$i"]);
			}
			else{
				header("Location: ../../index.php?controller=wishes&action=index&pass=false");
				exit();
			}
		}		
	}

	header("Location: ../../index.php?controller=wishes&action=index&pass=true");
	exit();
?>