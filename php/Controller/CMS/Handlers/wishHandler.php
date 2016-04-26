<?php
/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/wishesModel.php';

class WishHandler{
	//declare
	private $wishesHandler="";

	public function __construct() {
		$wishModel = new wishesModel();
		if (isset($_POST['submit']) && isset($_POST['wishID'])){
			// ** ACCEPT **
			$wishModel->acceptWish($_POST['wishID']);
			header('Location: ../../../admin.php?controller=wish&action=Index');
		}
		else if (isset($_POST['decline']) && isset($_POST['wishID']))
		{
			// ** DECLINE **
			$wishModel->declineWish($_POST['wishID']);
			header('Location: ../../../admin.php?controller=wish&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$wishesHandler = new wishHandler();
?>