<?php
include ('../../Model/wishesAndTalentsModel.php');
	$count = getWishAmount();
	if(isset($_POST["save"])) {
		for($i = 1; $i <=(3-$count);$i++ ){
			if(isset ($_POST["wens$i"])){
				insertWish($_POST["wens$i"]);
			}
			else{
				header("Location: ../WishesController.php?pass=false");
				exit();
			}
		}		
	}

	header("Location: ../WishesController.php?pass=true"); 
	exit();
?>