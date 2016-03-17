<?php
echo "inside registration";
include ("../DB/Database.class.php");
include ("../DB/Userinsert.class.php");
$canPass = false;

if (isset($_POST["register"])) {
	if(isset($_POST["voornaam"]) && isset($_POST["achternaam"]) && isset($_POST["email"]) && isset($_POST["straatnaam"]) && isset($_POST["huisnummer"]) && isset($_POST["postcode"]) && isset($_POST["woonplaats"]) && isset($_POST["geslacht"]) && isset($_POST["wachtwoord"]) && isset($_POST["confirmwachtwoord"])){    
		if($_POST["wachtwoord"] === $_POST["confirmwachtwoord"]){
			if($_POST['maand'] <= 12 && ($_POST['dag'] >= 1 && $_POST['dag'] <= 31) && strlen((string)$_POST['jaar']) === 4)                    
				$canPass = true;
		}else{
			echo "Passwords are not equal";
		}
	}
}

function calculateAge($datetime){
	$birthday = new DateTime($datetime);
	$now = new DateTime();
	$interval = $birthday->diff($now);
	return $interval->y;
}

if($canPass){
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	$jaar = $_POST["jaar"];
	$maand = $_POST["maand"];
	$dag = $_POST["dag"];
	echo $jaar."-".$maand."-".$dag;
	$dateFormat = date_create("".$jaar."-".$maand."-".$dag);
	$date = date_format($dateFormat, "Y-m-d");
	
	echo $date."<br>";
	#REGULAR ACCOUNT FORM VARIABLES HERE
	$voornaam = $_POST["voornaam"];
	$achternaam = $_POST["achternaam"];
	$tussenvoegsel = $_POST["tussenvoegsel"];
	$email = $_POST["email"];
	$straatnaam = $_POST["straatnaam"];
	$huisnummer = $_POST["huisnummer"];
	$postcode = $_POST["postcode"];
	$woonplaats = $_POST["woonplaats"];
	$geslacht = $_POST["geslacht"];
	$rechten = 2;
	$wachtwoord = $_POST["wachtwoord"];
	$gebruikersnaam = substr($voornaam, 0, 1).substr($achternaam, 0, 1).calculateAge($date);
	$gebruikersnaam = strtolower($gebruikersnaam);
	
	$insertclass = new Userinsert();
	$var = $insertclass->insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord);
	
}