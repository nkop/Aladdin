<?php
/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/talentsModel.php';
include '../../../Controller/PHPMailer/Mailer.php';

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
			$db = Database::getInstance();
			
			//Execute some query's
			$naam = $db->getNameByTalentId($_POST['talentID']);
			$email = $db->getEmailByTalentId($_POST['talentID']);
			$tekst = $db->getTalentTekstById($_POST['talentID']);
			
			#construct mail body, recipient, subject
			$subject = "Aladdin - Talent afgewezen";
			$message = "Beste $naam,<br/><br /> Uw recent aangemaakte talent:<br/><br/><b>$tekst</b><br/><br/> is afgewezen door onze administrator. Neem contact met ons op via onze website, of raadpleeg ons regelement.<br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
			$recipient = $email;

			#Call SendMail (coming from /PHPMailer/Mailer.php)
			SendMail($recipient, $message, $subject);
			
			// ** DECLINE **
			$talentModel->declineTalent($_POST['talentID']);
			header('Location: ../../../admin.php?controller=talent&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$talentsHandler = new TalentHandler();
?>