<?php
class Userinsert{
	
	function calculateAge($datetime){
		$birthday = new DateTime($datetime);
		$now = new DateTime();
		$interval = $birthday->diff($now);
		return $interval->y;
	}
	
function insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){

	echo $gebruikersnaam."<br>";
	echo $voornaam."<br>";
	echo $achternaam."<br>";
	echo $tussenvoegsel."<br>";
	echo $email."<br>";
	echo $straatnaam."<br>";
	echo $huisnummer."<br>";
	echo $postcode."<br>";
	echo $woonplaats."<br>";
	echo $geslacht."<br>";
	echo $rechten."<br>";
	echo $wachtwoord."<br>";
		
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