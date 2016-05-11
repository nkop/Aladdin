<?php

/*
 * @author Wouter van de Ven
* */
include_once '../../../Model/DB/Database.class.php';
include_once '../../../Model/CMS/wishesModel.php';
include '../../../Controller/PHPMailer/Mailer.php';

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
			$db = Database::getInstance();
			// ** DECLINE **
						//Execute some query's
			$naam = $db->getNameByWensId($_POST['wishID']);
			$email = $db->getEmailByWensId($_POST['wishID']);
			$tekst = $db->getWensTekstById($_POST['wishID']);
			
			#construct mail body, recipient, subject
			$subject = "Aladdin - Wens afgewezen";
			$message = "Beste $naam,<br/><br /> Uw recent aangemaakte wens:<br/><br/><b>$tekst</b><br/><br/> is afgewezen door onze administrator. Neem contact met ons op via onze website, of raadpleeg ons regelement.<br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
			$recipient = $email;

			#Call SendMail (coming from /PHPMailer/Mailer.php)
			SendMail($recipient, $message, $subject);
			$wishModel->declineWish($_POST['wishID']);
			header('Location: ../../../admin.php?controller=wish&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$wishesHandler = new wishHandler();
?>