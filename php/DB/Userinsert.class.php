<?php
class Userinsert{
	
	function calculateAge($datetime){
		$birthday = new DateTime($datetime);
		$now = new DateTime();
		$interval = $birthday->diff($now);
		return $interval->y;
	}
	
function insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){

	$gebruikersnaam = mysqli_real_escape_string($gebruikersnaam);
	$voornaam = mysqli_real_escape_string($voornaam);
	$achternaam = mysqli_real_escape_string($achternaam);
	$tussenvoegsel = mysqli_real_escape_string($tussenvoegsel);
	$email = mysqli_real_escape_string($email);
	$straatnaam = mysqli_real_escape_string($straatnaam);
	$huisnummer = mysqli_real_escape_string($huisnummer);
	$postcode = mysqli_real_escape_string($postcode);
	$woonplaats = mysqli_real_escape_string($woonplaats);
	$geslacht = mysqli_real_escape_string($geslacht);
	$rechten = mysqli_real_escape_string($rechten);
	$wachtwoord = mysqli_real_escape_string($wachtwoord);
	$date = mysqli_real_escape_string($date);
		
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
		if ($sql->doSQL($query)) {
			header('location: ../View/SuccesPage.php');
		} else {
		echo mysqli_error($sql);
			}
	}
	
	
	
	}
}
?>