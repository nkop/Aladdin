<?php

class Userinsert{

	function calculateAge($datetime){
		$birthday = new DateTime($datetime);
		$now = new DateTime();
		$interval = $birthday->diff($now);
		return $interval->y;
	}

function insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){

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
		header('location: ../View/ErrorPage.php');
		echo "AL GEREGISTREERD";
	}
	else
	{
		echo "NIET geregitreerd";
		$query = "INSERT INTO account (gebruikersnaam, voornaam, achternaam, tussenvoegsel, geboortedatum, email, straatnaam, huisnummer, postcode, woonplaats, geslacht, rechten, wachtwoord) VALUES ('$gebruikersnaam', '$voornaam', '$achternaam', '$tussenvoegsel' , '$date', '$email' , '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$geslacht', '$rechten', '$wachtwoord')";
		if (mysqli_query($sql, $query)) {
			header('location: ../View/SuccesPage.php');
		} else {
		echo mysqli_error($sql);
			}
	}



	}
}
?>
