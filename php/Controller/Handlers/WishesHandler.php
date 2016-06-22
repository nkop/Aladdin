<?php


/*
 * @author: Jarric van Krieken
 */

$handler = new WishesHandler();

class WishesHandler{
	
	public function __construct() {
		include ('../../Model/wishesModel.php');
		session_start();
		$wishModel = new WishModel();
	
		// send right amount of wishes
		$count = $wishModel->getWishAmount($_SESSION['userName']);
		if(isset($_POST["save"])) {
			for($i = 1; $i <=(3-$count);$i++ ){
				if(isset ($_POST["wens$i"]) && isset($_SESSION["userName"])){
					$wishModel->insertWish($_POST["wens$i"],$_SESSION['userName']);
					
					if(isset ($_POST["tags$i"])){
						foreach($_POST["tags$i"] as $tag) {
							$wishModel->insertTagToWish($tag);
							echo $tag;
						}
					}
				}
				else{
					header("Location: ../../index.php?controller=wishes&action=index&pass=false");
					exit();
				}
			}		
		}
		//send action to extend wish
		if(isset($_POST["extend"])){
			if(!$wishModel->extendWish($_POST["wish"])){
				header("Location: ../../index.php?controller=wishes&action=index&pass=false");
				exit();
			}
		}
		// send action to change status to fulfilled
		if(isset($_POST["fulfill"]) && isset($_SESSION["userName"])){
			if(!$wishModel->fulfillWish($_POST["wishId"],$_SESSION["userName"])){
				header("Location: ../../index.php?controller=wishes&action=index&pass=false");
				exit();
			}	
		}
		header("Location: ../../index.php?controller=wishes&action=index&pass=true");
		exit();
	}
}
?>