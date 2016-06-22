<?php

/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/registrationModel.php';
include '../../../Controller/PHPMailer/Mailer.php';

class RegistrationHandler{
	//declare
	private $registrationHandler="";

	public function __construct() {
		$registrationModel = new RegistrationModel();
		if (isset($_POST['submit']) && isset($_POST['accountID'])){
			
			$db = Database::getInstance();
			// ** ACCEPT **
			//Execute some query's
			$naam = $db->getNameByID($_POST['accountID']);
			$email = $db->getEmailByID($_POST['accountID']);
				
			#construct mail body, recipient, subject
			$subject = "Aladdin - Registratie goedgekeurd";
			$message = "Beste $naam,<br/><br /> Uw registratie is bevestigd door onze administrator. Veel plezier met het gebruiken van onze website! <br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
			$recipient = $email;
			
			#Call SendMail (coming from /PHPMailer/Mailer.php)
			SendMail($recipient, $message, $subject);
			
			$registrationModel->acceptRegistration($_POST['accountID']);
			header('Location: ../../../admin.php?controller=registration&action=Accept');
		}
		else if (isset($_POST['decline']) && isset($_POST['accountID']))
		{
			$db = Database::getInstance();
			// ** DECLINE **
			$naam = $db->getNameByID($_POST['accountID']);
			$email = $db->getEmailByID($_POST['accountID']);
			
			#construct mail body, recipient, subject
			$subject = "Aladdin - Registratie afgewezen";
			$message = "Beste $naam,<br/><br /> Uw registratie is afgewezen door onze administrator. Bij vragen kunt u contact opnemen met ons op via onze website, of raadpleeg ons regelement.<br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
			$recipient = $email;

			#Call SendMail (coming from /PHPMailer/Mailer.php)
			SendMail($recipient, $message, $subject); 
			$registrationModel->declineRegistration($_POST['accountID']);
			header('Location: ../../../admin.php?controller=registration&action=Decline');
		}
	}
}
//call own class(direct from the href/post)
$registrationHandler = new RegistrationHandler();
?>