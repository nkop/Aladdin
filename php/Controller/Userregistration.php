<?php
echo "inside registration";
include ("../DB/Database.class.php");
include ("../DB/Userinsert.class.php");
$canPass = false;

if (isset($_POST["register"])) {
	if(isset($_POST["voornaam"]) && isset($_POST["achternaam"]) && isset($_POST["email"]) && isset($_POST["straatnaam"]) && isset($_POST["huisnummer"]) && isset($_POST["postcode"]) && isset($_POST["woonplaats"]) && isset($_POST["geslacht"]) && isset($_POST["wachtwoord"]) && isset($_POST["confirmwachtwoord"])){    
		if($_POST["wachtwoord"] === $_POST["confirmwachtwoord"]){
		echo "Wachtwoorden zijn gelijk";                     
		$canPass = true;
		}else{
			echo "Passwords are not equal";
		}
	}
}

if($canPass){
	$db = Database::getInstance();
	$sql = $db->getConnection();
	
	$jaar = $_POST["jaar"];
	$maand = $_POST["maand"];
	$dag = $_POST["dag"];
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
	
	$insertclass = new Userinsert();
	$var = $insertclass->insert_user($sql, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord);
	
}