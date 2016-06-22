<?php

/*
 * @author Niels Kop
 */
include_once '../../../Model/CMS/matchesModel.php';
include '../../../Controller/PHPMailer/Mailer.php';

Class MatchesHandler{
	
	private $__matchModel;
	private $matchesHandler;
	private $__succes = "location: ../../../admin.php?controller=matches&action=accept";
	private $__failure = "location: ../../../admin.php?controller=matches&action=decline";
	
	public function __construct(){

		$this->__matchModel = new MatchesModel();
		
		if(isset($_POST["accept"])){			
			if($this->__matchModel->AcceptMatch($_POST["matchID"])){
				$db = Database::getInstance();
				
				$wensenId = $db->getWensIdByMatchId($_POST["matchID"]);
				$wensPersonName = $db->getNameByWensId($wensenId);
				$wensPersonMail = $db->getEmailByWensId($wensenId);
				$wens = $db->getWensTekstById($wensenId);

				$talentId = $db->getTalentIdByMatchId($_POST["matchID"]);
				$talentPersonName = $db->getNameByTalentId($talentId);
				$talentPersonMail = $db->getEmailByTalentId($talentId);
				$talent = $db->getTalentTekstById($talentId);

				$subject = "Aladdin - Een match";

				$messageTalent = "Beste $talentPersonName, <br/><br /> Uw talent: <br /><br /><b>$talent</b><br /><br /> heeft een match met de wens:<br/><br/><b>$wens</b><br/><br/> Neem contact op met die persoon via: $wensPersonMail.<br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
				$recipientTalent = $talentPersonMail;

				$messageWens = "Beste $wensPersonName, <br/><br /> Uw wens: <br /><br /><b>$wens</b><br /><br /> heeft een match met het talent:<br/><br/><b></b>$talent<br/><br/> Neem contact op met die persoon via: $talentPersonMail.<br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
				$recipientWens = $wensPersonMail;

				// Call SendMail (coming from /PHPMailer/Mailer.php)
				SendMail($recipientWens, $messageWens, $subject);
				SendMail($recipientTalent, $messageTalent, $subject);
				//$talentPerson = $db->getEmailByTalentId();
				//$wensPerson = $db->getEmailByWensId();
				header($this->__succes);
			} else { header($this->__failure); }			
		}
		if(isset($_POST["decline"])){
			if($this->__matchModel->DeclineMatch($_POST["matchID"])){
				header($this->__succes);
			} else { header($this->__failure); }
		}
		if(isset($_POST["matchesgenerator"])){
			$this->__matchModel->generateMatches();
			header("location: ../../../admin.php?controller=matches&action=index");
		}
	}
}

$matchesHandler = new MatchesHandler();