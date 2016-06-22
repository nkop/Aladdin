<?php


/*
 * @author: Jarric van Krieken
 */

$handler = new WishesHandler();

class WishesHandler{
	
	public function __construct() {
		include ('../../Model/wishesModel.php');
		session_start();
		$wishModel = new WishesAndTalentsModel();
	
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
	
		header("Location: ../../index.php?controller=wishes&action=index&pass=true");
		exit();
	}
}
?>