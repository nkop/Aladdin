<?php
if (isset($_GET['nieuwsItemID']) && isset($_GET['action'])){
	$nieuwsitemID = $_GET['nieuwsItemID'];
	$action = $_GET['action'];
	
	switch ($action){
		case "remove":
			//remove het nieuwitem
			header('Location: ../Controllers/shoppingCart.php');
			break;
		case "edit":
			//link naar de edit page
			header('Location: ../Controllers/shoppingCart.php');
			break;
		default:
			header('Location: ../Controllers/shoppingCart.php');
			break;
	}
}


?>