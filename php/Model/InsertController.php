<?php

include ("DB/Database.class.php");

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
	
	getGebruikersnaam($gebruikersnaam);


	insertUser($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord);

}

function insertUser($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){
  include ('../Controller/Smarty/header.php');
  include_once 'password.php';
  $gebruikersnaam = mysqli_real_escape_string($sql, $gebruikersnaam);
  $voornaam = mysqli_real_escape_string($sql, $voornaam);
  $achternaam = mysqli_real_escape_string($sql, $achternaam);
  $tussenvoegsel = mysqli_real_escape_string($sql, $tussenvoegsel);
  $email = mysqli_real_escape_string($sql, $email);
  $straatnaam = mysqli_real_escape_string($sql, $straatnaam);
  $huisnummer = mysqli_real_escape_string($sql, $huisnummer);
  $postcode = mysqli_real_escape_string($sql, $postcode);
  $woonplaats = mysqli_real_escape_string($sql, $woonplaats);
  $geslacht = mysqli_real_escape_string($sql, $geslacht);
  $rechten = mysqli_real_escape_string($sql, $rechten);
  $wachtwoord = mysqli_real_escape_string($sql, $wachtwoord);
  $date = mysqli_real_escape_string($sql, $date);
  $wachtwoord = password_hash("$wachtwoord", PASSWORD_DEFAULT);

  $result = mysqli_query($sql, "SELECT 1 FROM account WHERE email = '$email'");
  if ($result && mysqli_num_rows($result) > 0)
  {
    $smarty->display('../../View/ErrorPage.tpl');
  }
  else
  {

    $query = "INSERT INTO account (gebruikersnaam, voornaam, achternaam, tussenvoegsel, geboortedatum, email, straatnaam, huisnummer, postcode, woonplaats, geslacht, rechten, wachtwoord) VALUES ('$gebruikersnaam', '$voornaam', '$achternaam', '$tussenvoegsel' , '$date', '$email' , '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$geslacht', '$rechten', '$wachtwoord')";
    if (mysqli_query($sql, $query)) {
      // header('location: ../../View/SuccesPage.php');
      $smarty->display('../../View/SuccesPage.tpl');
    } else {
    echo mysqli_error($sql);
      }
  }

}
?>
