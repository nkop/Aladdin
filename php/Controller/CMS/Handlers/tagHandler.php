<?php
/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/tagsModel.php';

class TagHandler{
	//declare
	private $tagsHandler="";

	public function __construct() {
		$tagModel = new tagsModel();
		if (isset($_POST['submit']) && isset($_POST['tagID'])){
			// ** ACCEPT **
			$tagModel->acceptTag($_POST['tagID']);
			header('Location: ../../../admin.php?controller=tag&action=Index');
		}
		else if (isset($_POST['decline']) && isset($_POST['tagID']))
		{
			// ** DECLINE **
			$tagModel->declineTag($_POST['tagID']);
			header('Location: ../../../admin.php?controller=tag&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$tagsHandler = new tagHandler();
?>