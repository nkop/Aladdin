<?php

/*
 * @author: Jarric van Krieken
 */

$handler = new TalentHandler();

class TalentHandler{

	public function __construct() {
		include ('../../Model/talentModel.php');
		session_start();
		$talentModel = new TalentsModel();
		
		// send a talent
		if(isset($_POST["save"])) {
			if(isset($_POST["talent"]) && isset($_SESSION["userName"])) {
				$talentModel->insertTalent($_POST["talent"],$_SESSION['userName']);
				if(isset ($_POST["tags"])){
					foreach($_POST["tags"] as $tag) {
						$talentModel->insertTagToTalent($tag);
					}
				}			
			}
			else{
				header("Location: ../../index.php?controller=talents&action=index&pass=false");
				exit();
			}
		}
		
		// send action to delete talent
		if(isset($_POST["deleteTalent"])) {
			if(isset($_POST["talentId"]) && isset($_SESSION["userName"])) {
				$talentModel->deleteTalent($_POST["talentId"],$_SESSION['userName']);
			}
			else{
				header("Location: ../../index.php?controller=talents&action=index&pass=false");
				exit();
			}			
		}
	
		header("Location: ../../index.php?controller=talents&action=index&pass=true"); 
		exit();
	}
}
?>