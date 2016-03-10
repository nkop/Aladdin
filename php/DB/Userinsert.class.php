<?php
class Userinsert{
	
function insert_user($sql, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){

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
		
	// 		$query = "INSERT INTO testing (id, naam, achternaam, nummer) VALUES ('1', 'mick', 'dep', '0634903897')";
	$query = "INSERT INTO account (gebruikersnaam, voornaam, achternaam, tussenvoegsel, geboortedatum, email, straatnaam, huisnummer, postcode, woonplaats, geslacht, rechten, wachtwoord) VALUES ('Mickey10', '$voornaam', '$achternaam', '$tussenvoegsel' , '$date', '$email' , '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$geslacht', '$rechten', '$wachtwoord')";
	if (mysqli_query($sql, $query)) {
		header('location: ../View/SuccesPage.php');
	} else {
	echo mysqli_error($sql);
		}
	}
}
?>