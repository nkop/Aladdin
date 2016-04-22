<?php
echo "inside registration";
include ("../../Model/DB/Database.class.php");
include ("../../Model/DB/userInsertModel.php");
include ("../../Model/password.php");

#variable to check if values are valid
$canPass = false;

#validate data
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


#function to calculate age based on the user's age.
function CalculateAge($datetime){
	$birthday = new DateTime($datetime);
	$now = new DateTime();
	$interval = $birthday->diff($now);
	return $interval->y;
}

if($canPass){

	#get database connection
	$db = Database::getInstance();
	$sql = $db->getConnection();

	#get date values
	$jaar = $_POST["jaar"];
	$maand = $_POST["maand"];
	$dag = $_POST["dag"];

	#format date
	$dateFormat = date_create("".$jaar."-".$maand."-".$dag);
	$date = date_format($dateFormat, "Y-m-d");

	#Get values from post array
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

	#generate username
	$gebruikersnaam = substr($voornaam, 0, 1).substr($achternaam, 0, 1).CalculateAge($date);
	$gebruikersnaam = strtolower($gebruikersnaam);

	#escape all strings to avoid injection
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

	#instantiate new instance of userInsertModel and insert current values.
	$insertclass = new Userinsert();
	$insertclass->insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord);

}
