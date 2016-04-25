<?php
/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/talentsModel.php';

class TalentHandler{
	//declare
	private $talentsHandler="";

	public function __construct() {
		$talentModel = new talentsModel();
		if (isset($_POST['submit']) && isset($_POST['talentID'])){
			// ** ACCEPT **
			$talentModel->acceptTalent($_POST['talentID']);
			header('Location: ../../../admin.php?controller=talent&action=Index');
		}
		else if (isset($_POST['decline']) && isset($_POST['talentID']))
		{
			// ** DECLINE **
			$talentModel->declineTalent($_POST['talentID']);
			header('Location: ../../../admin.php?controller=talent&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$talentsHandler = new TalentHandler();
?>